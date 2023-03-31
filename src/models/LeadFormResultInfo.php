<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

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