<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormQuestion extends Model
{
    /**
     * @var bool
     */
    public $is_required;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var Answer[]
     */
    public $answers;
}