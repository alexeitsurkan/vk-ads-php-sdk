<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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
     * @var LeadContactInfo
     */
    public $contact_info;

    /**
     * @var LeadAnswer[]
     */
    public $answers;
}