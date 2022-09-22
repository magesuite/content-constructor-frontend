<?php

namespace MageSuite\ContentConstructorFrontend\Controller\Components;

class Index extends  \Magento\Framework\App\Action\Action
{
    const ENABLE_COMPONENT_LIST_PAGE_CONFIG_PATH = 'cc_frontend_extension/configuration/enable_component_list_page';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
     */
    public function execute()
    {
        if (!$this->scopeConfig->getValue(self::ENABLE_COMPONENT_LIST_PAGE_CONFIG_PATH)) {
            throw new \Magento\Framework\Exception\NotFoundException(__('Page not found.'));
        }

        $resultPage = $this->resultPageFactory->create();

        return $resultPage;
    }
}
