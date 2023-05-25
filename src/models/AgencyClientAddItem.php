<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ClientOrdJuridical;
use VkAdsPhpSdk\models\ClientOrdPhysical;
use VkAdsPhpSdk\models\UserClient;
use Symfony\Component\Validator\Constraints as Assert;

class AgencyClientAddItem extends Model
{
    public const ACCESS_TYPES = ['full_access', 'readonly', 'fin_readonly', 'ads_readonly'];

    /**
     * @var bool
     */
    public $is_vkads;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Choice(self::ACCESS_TYPES)
     */
    public $access_type;

    /**
     * @var UserClient
     * @Assert\Valid
     */
    public $user;

    /**
     * @var ClientOrdJuridical
     * @Assert\Valid
     */
    public $juridical_details;

    /**
     * @var ClientOrdPhysical
     * @Assert\Valid
     */
    public $physical_details;
}