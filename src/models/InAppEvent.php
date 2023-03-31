<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class InAppEvent extends Model
{
    /**
     * @var RemarketingInAppEventCount
     */
    public $count;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $inapp_event_category_id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $campaign_ids;
}