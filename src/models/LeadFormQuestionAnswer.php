<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormQuestionAnswer extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $text;
}