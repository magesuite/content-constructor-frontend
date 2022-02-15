<?php
declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\ViewModel;

class VideoTeaser implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected \Magento\Cms\Model\Template\FilterProvider $filterProvider;

    public function __construct(\Magento\Cms\Model\Template\FilterProvider $filterProvider)
    {
        $this->filterProvider = $filterProvider;
    }

    public function prepareVideoUrl(array $data): array
    {
        if (!isset($data['type']) || $data['type'] != 'file') {
            return $data;
        }

        $data['url'] = $this->filterProvider->getBlockFilter()
            ->filter($data['url']);

        return $data;
    }
}
