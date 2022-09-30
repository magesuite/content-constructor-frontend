<?php

namespace MageSuite\ContentConstructorFrontend\Controller\Components;

class Image extends \Magento\Framework\App\Action\Action
{
    protected \Magento\Framework\View\Result\PageFactory $resultPageFactory;
    protected \Magento\Framework\Image\AdapterFactory $adapterFactory;
    protected \Magento\Framework\Controller\Result\RawFactory $rawFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Image\AdapterFactory $adapterFactory,
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    )
    {
        parent::__construct($context);
        $this->adapterFactory = $adapterFactory;
        $this->rawFactory = $rawFactory;
    }

    public function execute(): \Magento\Framework\Controller\ResultInterface
    {
        if (!$this->_request->getParam('image_path')) {
            throw new \Magento\Framework\Exception\NotFoundException(__('Page not found.'));
        }

        $imagePath = base64_decode($this->_request->getParam('image_path'));
        $imageDir = realpath(__DIR__ . '/../../assets/creative_components');

        $imageRealPath = realpath($imageDir . \DIRECTORY_SEPARATOR . $imagePath);

        if(strpos($imageRealPath, $imageDir) !== 0) {
            throw new \Magento\Framework\Exception\NotFoundException(__('Page not found.'));
        }

        $image = $this->adapterFactory->create();
        $resultRaw = $this->rawFactory->create();
        $image->open($imageRealPath);

        $resultRaw->setHeader('Content-Type', $image->getMimeType());
        $resultRaw->setContents($image->getImage());

        return $resultRaw;
    }
}
