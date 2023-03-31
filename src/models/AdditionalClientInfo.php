<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class AdditionalClientInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $client_info;

    /**
     * @var string
     */
    public $client_name;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phone;
}