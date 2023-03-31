<?php

namespace app\vk_ads_api\src\services\remarketing\services\counters\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

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