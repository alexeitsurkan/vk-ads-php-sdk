<?php

namespace app\vk_ads_api\src\services\agency\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ClientOrdJuridical;
use app\vk_ads_api\src\models\ClientOrdPhysical;
use app\vk_ads_api\src\models\UserClient;

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