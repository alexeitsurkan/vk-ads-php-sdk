<?php

namespace VkAdsPhpSdk\services\banner_patterns\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class BannerPatternSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 10;

    /**
     * @var int
     */
    public $offset = 0;
}