<?php

namespace MageSuite\ContentConstructorFrontend\Model\Component;

class Accordion extends \Magento\Framework\DataObject implements ViewModel
{
    /**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
    protected $filterProvider;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @var \Magento\Framework\Locale\Resolver
     */
    protected $localeResolver;

    public function __construct(
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Locale\Resolver $localeResolver,
        array $data = []
    ){
        parent::__construct($data);
        $this->filterProvider = $filterProvider;
        $this->logger = $logger;
        $this->localeResolver = $localeResolver;
    }

    public function renderWysiwygContent($content)
    {
        try {
            return $this->filterProvider->getPageFilter()->filter($content);
        } catch(\Exception $e) {
            $this->logger->warning($e->getMessage());
            return '';
        }
    }

    public function getAccordionComponentOptions($accordionOptionsGlobal)
    {
        $baseOptions = [
            "openedState" => "cs-accordion__item--active",
            "multipleCollapsible" => $this->getMultipleCollapsible(),
            "active" => $this->getExpandFirst() ? "0" : ""
        ];

        return json_encode(array_merge($baseOptions, $accordionOptionsGlobal));
    }

    public function getGroupAdditionalClass($headline)
    {
        $headline = $this->transliterate($headline);
        $headline = $this->removeSpecialCharacters($headline);

        $headline = explode(' ', strtolower($headline));

        $headline =  array_slice($headline, 0, 3);

        return 'group-' . implode('-', $headline);
    }

    private function transliterate($headline)
    {
        setlocale(LC_ALL, $this->localeResolver->getLocale());

        $headline = iconv('UTF-8', 'ASCII//TRANSLIT', $headline);

        setlocale(LC_ALL, locale_get_default());

        return $headline;
    }

    private function removeSpecialCharacters($headline)
    {
        return preg_replace('/[^A-Za-z0-9\- ]/', '', $headline);
    }
}
