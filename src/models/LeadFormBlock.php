<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class LeadFormBlock extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var BlockData
     */
    public $block_data;
}