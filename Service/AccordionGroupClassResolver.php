<?php

namespace MageSuite\ContentConstructorFrontend\Service;

class AccordionGroupClassResolver
{
    /**
     * @var \Magento\Framework\Locale\Resolver
     */
    protected $localeResolver;

    public function __construct(\Magento\Framework\Locale\Resolver $localeResolver)
    {
        $this->localeResolver = $localeResolver;
    }

    public function resolveGroupClass($headline)
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
