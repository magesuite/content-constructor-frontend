<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Controller;

class ComponentsListShortUrlRouter implements \Magento\Framework\App\RouterInterface
{
    protected \Magento\Framework\App\ActionFactory $actionFactory;
    protected string $customUrl;
    protected \Magento\Framework\App\ResponseInterface $response;

    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory,
        \MageSuite\ContentConstructorFrontend\Helper\Configuration $configuration,
        string $frontName,
        \Magento\Framework\App\Response\RedirectInterface $redirect,
        \Magento\Framework\App\ResponseInterface $response,
        \Magento\Framework\UrlInterface $url,
    ) {
        $this->actionFactory = $actionFactory;
        $this->configuration = $configuration;
        $this->customUrl = $configuration->getCustomUrl() ?: $customUrl;
        $this->response = $response;
        $this->url = $url;
    }

    public function match(
        \Magento\Framework\App\RequestInterface $request
    ): ?\Magento\Framework\App\ActionInterface {
        $identifier = trim($request->getPathInfo(), '/');

        if ($identifier !== $this->frontName) {
            return null;
        }

        $url = $this->url->getUrl('contentconstructor/components/index');
        $this->response->setRedirect($url)->sendResponse();

        $request->setModuleName('contentconstructor')
            ->setControllerName('components')
            ->setActionName('index');

        return $this->actionFactory->create(
            \Magento\Framework\App\Action\Forward::class,
            ['request' => $request]
        );
    }
}
