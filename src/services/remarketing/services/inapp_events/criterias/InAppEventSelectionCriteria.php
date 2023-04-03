<?php

namespace VkAdsPhpSdk\services\remarketing\services\inapp_events\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class InAppEventSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 20;

    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var string
     */
    public $_url_object_id;
}