<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Block\System\Config\Form\Field;

class AuthorizeInstagramButton extends \Magento\Config\Block\System\Config\Form\Field
{
    protected $_template = 'MageSuite_ContentConstructorFrontend::system/config/authorize_instagram_button.phtml'; // phpcs:ignore

    public function __construct(
        protected \MageSuite\ContentConstructorFrontend\Service\Instagram\Integration\GetAuthorizationUrl $getAuthorizationUrl,
        \Magento\Backend\Block\Template\Context $context,
        array $data = [],
        ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null
    ) {
        parent::__construct(
            $context,
            $data,
            $secureRenderer
        );
    }

    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element): string
    {
        return $this->_toHtml();
    }

    public function getButtonUrl(): string
    {
        return $this->getAuthorizationUrl->execute();
    }

    public function getButtonHtml(): string
    {
        $button = $this->getLayout()
            ->createBlock(\Magento\Backend\Block\Widget\Button::class)
            ->setData([
                'id' => 'authorize-instagram-button',
                'label' => __('Authorize Instagram'),
            ]);

        return $button->toHtml();
    }

}
