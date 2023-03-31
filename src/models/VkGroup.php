<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class VkGroup extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $members_count;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shortname;
}