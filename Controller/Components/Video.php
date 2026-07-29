<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Controller\Components;

class Video extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        protected \Magento\Framework\Filesystem\Driver\File $driver,
        protected \Magento\Framework\Url\DecoderInterface $urlDecoder
    ) {
        parent::__construct($context);
    }

    public function execute(): void
    {
        $videoRealPath = $this->resolveVideoPath();

        $size = (int)$this->driver->stat($videoRealPath)['size'];
        $startByte = 0;
        $endByte = $size - 1;

        /** @var \Magento\Framework\App\Response\Http $response */
        $response = $this->getResponse();
        $response->setHeader('Content-Type', 'video/mp4', true);
        $response->setHeader('Accept-Ranges', 'bytes', true);

        $rangeHeader = $this->_request->getServer('HTTP_RANGE');

        if ($rangeHeader && preg_match('/bytes=(\d*)-(\d*)/', (string)$rangeHeader, $matches)) {
            if ($matches[1] !== '') {
                $startByte = (int)$matches[1];
            }

            if ($matches[2] !== '') {
                $endByte = (int)$matches[2];
            }

            if ($startByte > $endByte || $endByte >= $size) {
                $response->setStatusHeader(416, null, 'Requested Range Not Satisfiable');
                $response->setHeader('Content-Range', 'bytes */' . $size, true);

                return;
            }

            $response->setStatusHeader(206, null, 'Partial Content');
            $response->setHeader('Content-Range', "bytes $startByte-$endByte/$size", true);
        }

        $length = $endByte - $startByte + 1;
        $response->setHeader('Content-Length', (string)$length, true);
        $response->setBody($this->readRange($videoRealPath, $startByte, $length));
    }

    protected function resolveVideoPath(): string
    {
        $encodedPath = $this->_request->getParam('video_path');

        if (!$encodedPath) {
            throw new \Magento\Framework\Exception\NotFoundException(__('No file provided.'));
        }

        $videoDir = $this->driver->getRealPath(__DIR__ . '/../../assets/creative_components');
        $videoRealPath = $this->driver->getRealPath(
            $videoDir . \DIRECTORY_SEPARATOR . $this->urlDecoder->decode($encodedPath)
        );

        if (!$videoRealPath || !str_starts_with($videoRealPath, $videoDir)) {
            throw new \Magento\Framework\Exception\NotFoundException(__('Page not found.'));
        }

        return $videoRealPath;
    }

    protected function readRange(string $videoRealPath, int $startByte, int $length): string
    {
        $resource = $this->driver->fileOpen($videoRealPath, 'rb');
        $this->driver->fileSeek($resource, $startByte);
        $content = $this->driver->fileRead($resource, $length);
        $this->driver->fileClose($resource);

        return $content;
    }
}
