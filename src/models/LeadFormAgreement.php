<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormAgreement extends Model
{
    /**
     * @var string
     */
    public $usage;

    /**
     * @var TemplateDocument
     */
    public $template_document;
}