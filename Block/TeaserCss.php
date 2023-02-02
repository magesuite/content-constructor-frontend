<?php
namespace MageSuite\ContentConstructorFrontend\Block;

class TeaserCss extends \Magento\Framework\View\Element\Template
{
    protected const DEFAULT_DEVICE_TYPE = 'desktop';

    protected array $deviceTypeToBreakpointNamesMapping = [
        'mobile' => ['phone', 'phoneLg'],
        'tablet' => ['tablet'],
        'desktop' => ['laptop', 'laptopLg', 'desktop', 'tv']
    ];

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\TeaserCss
     */
    protected $cssHelper;

    /**
     * @var \MageSuite\ContentConstructorFrontend\Helper\CategoryGridTeasers
     */
    protected $categoryGridTeasersHelper;

    /**
     * @var \MageSuite\ThemeHelpers\Helper\PageLayout
     */
    protected $pageLayoutHelper;

    /**
     * @var iterable
     */
    protected $teasers;

    /**
     * @var iterable
     */
    protected $breakpoints;

    public function __construct(
        \MageSuite\ContentConstructorFrontend\Helper\TeaserCss $cssHelper,
        \MageSuite\ContentConstructorFrontend\Helper\CategoryGridTeasers $categoryGridTeasersHelper,
        \MageSuite\ThemeHelpers\Helper\PageLayout $pageLayoutHelper,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->cssHelper = $cssHelper;
        $this->categoryGridTeasersHelper = $categoryGridTeasersHelper;
        $this->pageLayoutHelper = $pageLayoutHelper;
    }

    public function canRenderTeaser()
    {
        if (!$this->getUseTeasers()) {
            return false;
        }
        if (empty($this->getTeasers())) {
            return false;
        }
        if ($this->getIsProductsGrid()) {
            return true;
        }
        if (!$this->getShowTeasersOnlyOnFirstPage()) {
            return true;
        }
        if ($this->getPaginationViewModel()->isFirstPage()) {
            return true;
        }
        return false;
    }

    public function getTeasers()
    {
        if ($this->teasers === null) {
            if ($this->getIsProductsGrid()) {
                $this->teasers = $this->getTeasersConfig() ?? [];
            } else {
                $this->teasers = $this->categoryGridTeasersHelper->getConfig()['json'] ?? [];
            }
        }
        return $this->teasers;
    }

    public function getBreakpoints()
    {
        if ($this->breakpoints === null) {
            $breakpoints = $this->getVar('breakpoints', 'Magento_Theme') ?: [];
            $this->breakpoints = new \CachingIterator(new \ArrayIterator($breakpoints), \CachingIterator::CALL_TOSTRING | \CachingIterator::FULL_CACHE);
        }
        return $this->breakpoints;
    }

    public function getTeaserSelector($index = 0)
    {
        return sprintf('#%s', $this->getTeasersSetId() . '-' . $index);
    }

    public function getColumnsConfig()
    {
        $pageLayout = $this->pageLayoutHelper->getPageLayout();
        $columnsCfgPath = $pageLayout === '1column' ? 'columns/one-column' : 'columns/multiple-columns';
        return $this->getVar($columnsCfgPath, 'MageSuite_ContentConstructor');
    }

    public function getTeaserAspectRatios($teaser)
    {
        $columnsConfig = $this->getColumnsConfig();
        $projectBreakpoints = $this->getBreakpoints();

        $aspectRatios = [];
        $i = 0;
        $previousBreakpoint = 0;

        foreach ($projectBreakpoints as $breakpointName => $breakpoint) {
            if ($teaser['size']['x'] >= $columnsConfig[$breakpointName]) {
                $maxWidth = $projectBreakpoints->hasNext() ? $projectBreakpoints->getInnerIterator()->current() - 1 : null;

                $aspectRatios[$i] = [
                    'minWidth' => $breakpoint,
                    'maxWidth' => $maxWidth,
                    'aspect-ratio' => false
                ];
                $previousBreakpoint = $i;
            }

            $i++;
        }
        return $aspectRatios;
    }

    /**
     * Hide teaser if its $row value is:
     * - bigger than current rows available for given breakpoint;
     * - bigger or equal than current rows available for given breakpoint AND size of given teaser takes more than 1 row (Y-axis)
     */
    public function getTeaserOverflows($teaser)
    {
        $productsGridRowsConfig = $this->getRowsConfig();
        $columnsCfg = $this->getColumnsConfig();
        $projectBreakpoints = $this->getBreakpoints();

        $overflows = [];
        $currentRows = 1;
        $i = 0;
        $prevBreakpoint = 0;

        foreach ($projectBreakpoints as $breakpointName => $breakpoint) {
            if ($this->getIsProductsGrid()) {
                $deviceType = $this->getDeviceTypeByBreakpointName($breakpointName);

                $currentRows = $productsGridRowsConfig[$deviceType];
            } else {
                $currentRows = ceil($this->getProductsCount() / $columnsCfg[$breakpointName]);
            }
            $overflow = $teaser['size']['y'] > 1 ? $teaser['gridPosition']['y'] >= $currentRows : $teaser['gridPosition']['y'] > $currentRows;
            $maxWidth = $projectBreakpoints->hasNext() ? $projectBreakpoints->getInnerIterator()->current() - 1 : null;
            if (!isset($overflows[$prevBreakpoint]) || $overflows[$prevBreakpoint]['overflows'] !== $overflow) {
                $overflows[$i] = [
                    'minWidth' => $breakpoint,
                    'maxWidth' => $maxWidth,
                    'overflows' => $overflow
                ];
                $prevBreakpoint = $i;
            } else {
                $overflows[$prevBreakpoint]['maxWidth'] = $maxWidth;
            }
            $i++;
        }
        return $overflows;
    }

    /**
     * Get teaser columns settings for specific breakpoints.
     * It will prevent printing every single breakpoint unnecesarily.
     * It will print only values that has actually changed for given breakpoint.
     * F.e. if for breakpoints phone - laptop $column is still calculated to 1, there's no need to print 'phoneLg' and 'tablet' media queries.
     */
    public function getTeaserColumns($teaser)
    {
        $columnsCfg = $this->getColumnsConfig();
        $projectBreakpoints = $this->getBreakpoints();
        $prevColumn = 1;
        $columns = [];
        $position = $teaser['gridPosition']['x'];
        $size = $teaser['size'];
        foreach ($projectBreakpoints as $breakpointName => $breakpoint) {
            // Set column based on $position that doesn't have int values but keywords 'left'/'center'/'right'
            $column = 1;
            if ($position === 'right') {
                $column = $columnsCfg[$breakpointName];
                if ($size['x'] > 1 && $column > 1) {
                    $column = $column - ($size['x'] - 1);
                }
            }
            if ($position === 'center') {
                $column = ceil($columnsCfg[$breakpointName] / 2);
            }
            // Prevent grid blowouts
            if ($column < 1) {
                $column = 1;
            } else if ($column > $columnsCfg[$breakpointName]) {
                $column = $columnsCfg[$breakpointName];
            }
            if ($prevColumn !== $column) {
                $columns[] = [
                    'breakpoint' => $breakpoint,
                    'column' => $column
                ];
            }
            $prevColumn = $column;
        }
        return $columns;
    }

    protected function getDeviceTypeByBreakpointName($breakpointName) {
        foreach($this->deviceTypeToBreakpointNamesMapping as $deviceType => $breakpointNames) {
            if(!in_array($breakpointName, $breakpointNames)) {
                continue;
            }

            return $deviceType;
        }

        return self::DEFAULT_DEVICE_TYPE;
    }
}
