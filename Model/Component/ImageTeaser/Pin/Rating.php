<?php

declare(strict_types=1);

namespace MageSuite\ContentConstructorFrontend\Model\Component\ImageTeaser\Pin;

class Rating extends \Magento\Framework\DataObject
{
    public function getMaxStars(): int
    {
        return (int)$this->_getData('max_stars');
    }

    public function getActiveStars(): float
    {
        return (float)$this->_getData('active_stars');
    }

    public function getReviewsCount(): int
    {
        return (int)$this->_getData('reviews_count');
    }
}
