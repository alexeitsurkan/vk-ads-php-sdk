<?php

namespace app\vk_ads_api\src\services\remarketing\services\inapp_events\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

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