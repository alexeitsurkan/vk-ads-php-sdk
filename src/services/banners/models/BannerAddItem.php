<?php

namespace app\vk_ads_api\src\services\banners\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\ModerationReason;

class BannerAddItem extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;

    /**
     * @var object with BannerContent as values todo check
     */
    public $content;

    /**
     * @var object with Textblock as values todo check
     */
    public $textblocks;

    /**
     * @var object with Urls as values todo check
     */
    public $urls;
}