<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class AppleApp extends Model
{
    /**
     * @var int
     */
    public $category_id;

    /**
     * @var string
     */
    public $content_rating;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IconImage
     */
    public $icon_image;

    /**
     * @var int
     */
    public $id;
    
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
}