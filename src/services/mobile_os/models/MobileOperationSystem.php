<?php

namespace app\vk_ads_api\src\services\mobile_os\models;

use app\vk_ads_api\src\components\Model;

class MobileOperationSystem extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $sk_ad_network_id_required;
}