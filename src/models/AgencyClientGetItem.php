<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ClientOrdJuridical;
use VkAdsPhpSdk\models\ClientOrdPhysical;
use VkAdsPhpSdk\models\UserClient;

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