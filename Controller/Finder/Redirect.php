<?php

namespace MageSuite\ContentConstructorFrontend\Controller\Finder;

class Redirect extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\UrlGenerator
     */
    protected $urlGenerator;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MageSuite\ContentConstructorFrontend\Service\ProductFinder\Redirect\UrlGenerator $urlGenerator
    )
    {
        parent::__construct($context);

        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Redirect to category with applied filters
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $post = $this->getRequest()->getPost();

        if (empty($post)) {
            return $this->_redirect($this->_redirect->getRefererUrl());
        }

        $categoryId = $post['category_id'];
        $attributesValues = isset($post['attributes']) ? $post['attributes'] : [];

        $url = $this->urlGenerator->generateUrl($categoryId, $attributesValues);

        if ($url == null) {
            return $this->_redirect($this->_redirect->getRefererUrl());
        }

        return $this->_redirect($url);
    }
}
