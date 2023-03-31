<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class RemarketingInAppEventCount extends Model
{

    /**
     * @var RemarketingInAppEventCountDate[]
     */
    public $rows;

    /**
     * @var int
     */
    public $total;
}