<?php

namespace app\vk_ads_api\src\services\lead_ads\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\LeadAnswer;

class LeadsListElement extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $form_id;

    /**
     * @var string
     */
    public $form_name;

    /**
     * @var int
     */
    public $ad_plan_id;

    /**
     * @var int
     */
    public $ad_group_id;

    /**
     * @var int
     */
    public $banner_id;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var ContactInfo
     */
    public $contact_info;

    /**
     * @var LeadAnswer[]
     */
    public $answers;
}