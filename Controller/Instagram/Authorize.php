<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Controller\Instagram;

class Authorize implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    public function __construct(
        protected \Magento\Framework\App\RequestInterface $request,
        protected \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory,
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\ProcessAuthorization $authorizationService,
        protected \Psr\Log\LoggerInterface $logger,
    ) {}

    public function execute(): \Magento\Framework\Controller\Result\Redirect
    {
        $code = (string)$this->request->getParam('code');
        $code = rtrim($code, '#_');

        if (empty($code)) {
            return $this->redirectFactory->create()->setPath('/');
        }

        try {
            $this->authorizationService->execute($code);
        } catch (\Exception $e) {
            $this->logger->error('Exception when authorizing instagram: ' . $e->getMessage());
        }

        return $this->redirectFactory->create()->setPath('/');
    }
}
