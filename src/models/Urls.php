<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class Urls extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $url_object_id;

    /**
     * @var string
     */
    public $url_object_type;

    /**
     * @var string[]
     */
    public $url_types;
}