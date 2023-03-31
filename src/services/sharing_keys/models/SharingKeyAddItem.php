<?php

namespace app\vk_ads_api\src\services\sharing_keys\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\NestedUser;
use app\vk_ads_api\src\models\SharingKeySource;

class SharingKeyAddItem extends Model
{
    /**
     * @var bool
     */
    public $is_marketplace;


    /**
     * @var string
     */
    public $payment_type;

    /**
     * @var int
     */
    public $price;

    /**
     * @var bool
     */
    public $send_email;

    /**
     * @var SharingKeySource[]
     * @Assert\NotBlank()
     */
    public $sources;

    /**
     * @var SharingKeyUser[]
     */
    public $users;
}