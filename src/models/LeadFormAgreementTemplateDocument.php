<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormAgreementTemplateDocument extends Model
{
    /**
     * @var string
     */
    public $company_title;

    /**
     * @var string
     */
    public $registration_address;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $ogrn_or_inn;
}