<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\ModerationReason;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @var BannerContentAddItem[]
     */
    public $content;

    /**
     * @var Textblock[]
     */
    public $textblocks;

    /**
     * @var UrlsAddItem[]
     */
    public $urls;
}