<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadAnswer extends Model
{
    /**
     * @var string
     */
    public $block_id;

    /**
     * @var string
     */
    public $question_text;

    /**
     * @var LeadAnswerOption[]
     */
    public $answer_options;

    /**
     * @var string
     */
    public $answer_text;
}