<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class ManagerClientInfo extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $access_type;
}