<?php

namespace app\vk_ads_api\src\services\agency\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ClientOrdJuridical;
use app\vk_ads_api\src\models\ClientOrdPhysical;
use app\vk_ads_api\src\models\UserClient;

class AgencyClientGetItem extends Model
{
    /**
     * @var bool
     */
    public $is_vkads;

    /**
     * @var string
     */
    public $access_type;
    /**
     * @var string
     */
    public $status;

    /**
     * @var UserClient
     */
    public $user;

    /**
     * @var ClientOrdJuridical
     */
    public $juridical_details;

    /**
     * @var ClientOrdPhysical
     */
    public $physical_details;
}