<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormPage extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var Block[]
     */
    public $blocks;
}