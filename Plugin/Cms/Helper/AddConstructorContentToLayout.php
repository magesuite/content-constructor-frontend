<?php

namespace MageSuite\ContentConstructorFrontend\Plugin\Cms\Helper;

class AddConstructorContentToLayout
{
    /**
     * @var \Magento\Cms\Model\Page
     */
    protected $page;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\LayoutContentUpdateService
     */
    protected $layoutContentUpdateService;

    public function __construct(
        \Magento\Cms\Model\Page $page,
        \MageSuite\ContentConstructorFrontend\Service\LayoutContentUpdateService $layoutContentUpdateService
    ) {
        $this->page = $page;
        $this->layoutContentUpdateService = $layoutContentUpdateService;
    }

    public function afterPrepareResultPage(\Magento\Cms\Helper\Page $subject, \Magento\Framework\View\Result\Page $resultPage)
    {
        $this->layoutContentUpdateService->addContentConstructorToUpdateLayout($resultPage, $this->page);

        return $resultPage;
    }
}
