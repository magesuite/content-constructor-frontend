<?php

namespace MageSuite\ContentConstructorFrontend\Controller\Components;

class Video extends \Magento\Framework\App\Action\Action
{
    public function execute(): void
    {
        if (!$this->_request->getParam('video_path')) {
            throw new \Magento\Framework\Exception\NotFoundException(__('No file provided.'));
        }

        $videoPath = base64_decode($this->_request->getParam('video_path'));
        $videoDir = realpath(__DIR__ . '/../../assets/creative_components');

        $videoRealPath = realpath($videoDir . \DIRECTORY_SEPARATOR . $videoPath);

        $videoFile = @fopen($videoRealPath, 'rb');
        $size = filesize($videoRealPath);
        $startByte = 0;
        $endByte = $size - 1;
        $length = $endByte - $startByte + 1;

        header('Content-type: video/mp4');
        header('Accept-Ranges: bytes');
        header('HTTP/1.1 206 Partial Content');
        header("Content-Range: bytes $startByte - $endByte / $size");
        header('Content-Length: ' . $length);

        fseek($videoFile, $startByte);
        $buffer = 1024 * 8;

        while (!feof($videoFile) && ($currentPointer = ftell($videoFile)) <= $endByte) {
            if ($currentPointer + $buffer > $endByte) {
                $buffer = $endByte - $currentPointer + 1;
            }
            set_time_limit(0);
            echo fread($videoFile, $buffer);
            flush();
        }

        fclose($videoFile);
    }
}
