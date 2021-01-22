<?php
namespace MageSuite\ContentConstructorFrontend\ViewModel;

class PaginationViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Theme\Block\Html\Pager
     */
    protected $pager;

    public function __construct(\Magento\Theme\Block\Html\Pager $pager)
    {
        $this->pager = $pager;
    }

    public function isFirstPage()
    {
        return $this->pager->getCurrentPage() === 1;
    }
}
