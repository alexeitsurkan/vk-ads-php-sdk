<?php

namespace VkAdsPhpSdk\services\banner_fields\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class BannerFieldSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 20;

    /**
     * @var int
     */
    public $offset = 0;
}