<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class SkAdNetworkIdsCounts extends Model
{
    /**
     * @var int
     */
    public $available;

    /**
     * @var int
     */
    public $inherited_available;

    /**
     * @var int
     */
    public $inherited_total;

    /**
     * @var int
     */
    public $inherited_used;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $used;
}