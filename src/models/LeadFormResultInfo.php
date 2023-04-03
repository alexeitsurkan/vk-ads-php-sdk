<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadFormResultInfo extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $site_url;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var PromoCode
     */
    public $promo_code;
}