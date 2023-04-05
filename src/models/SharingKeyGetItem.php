<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\NestedUser;
use VkAdsPhpSdk\models\SharingKeySource;

class SharingKeyGetItem extends Model
{
    /**
     * @var bool
     */
    public $is_marketplace;

    /**
     * @var NestedUser
     */
    public $owner;

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
     * @var string
     */
    public $sharing_key;

    /**
     * @var string
     */
    public $sharing_url;

    /**
     * @var SharingKeySource[]
     */
    public $sources;

    /**
     * @var string
     */
    public $type;

    /**
     * @var SharingKeyUser[]
     */
    public $users;
}