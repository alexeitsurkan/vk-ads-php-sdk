<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ClientOrdJuridical;
use VkAdsPhpSdk\models\ClientOrdPhysical;
use VkAdsPhpSdk\models\UserClient;

class AgencyClientAddItem extends Model
{
    /**
     * @var bool
     */
    public $is_vkads;

    /**
     * @var string
     * @Assert\NotBlank()
     * [Assert\Choice(['full_access', 'readonly', 'fin_readonly', 'ads_readonly'])]
     */
    public $access_type;

    /**
     * @var UserClient
     * @Assert\Valid()
     */
    public $user;

    /**
     * @var ClientOrdJuridical
     * @Assert\Valid()
     */
    public $juridical_details;

    /**
     * @var ClientOrdPhysical
     * @Assert\Valid()
     */
    public $physical_details;
}