<?php

namespace VkAdsPhpSdk\services\remarketing\services\counters\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class CounterSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $_counter_id;

    /**
     * @var int[]
     */
    public $_counter_id__in;

    /**
     * @var string
     */
    public $_domain;

    /**
     * @var string[]
     */
    public $_domain__in;
}