<?php

namespace VkAdsPhpSdk\services\mobile_app_users\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class MobileAppSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 50;

    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var string[]
     */
    public $fields;
}