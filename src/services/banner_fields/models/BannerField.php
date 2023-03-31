<?php

namespace app\vk_ads_api\src\services\banner_fields\models;

use app\vk_ads_api\src\components\Model;

class BannerField extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $field;

    /**
     * @var object
     */
    public $format;

    /**
     * @var object
     */
    public $interface;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
}