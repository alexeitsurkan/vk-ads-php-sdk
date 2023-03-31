<?php

namespace app\vk_ads_api\src\services\remarketing\services\local_geo\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\LocalGeoPoint;

class LocalGeoAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $name;

    /**
     * @var LocalGeoPoint[]
     * @Assert\NotBlank()
     */
    public $regions;
}