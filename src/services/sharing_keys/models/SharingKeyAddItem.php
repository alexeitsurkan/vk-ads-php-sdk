<?php

namespace VkAdsPhpSdk\services\sharing_keys\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\NestedUser;
use VkAdsPhpSdk\models\SharingKeySource;

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