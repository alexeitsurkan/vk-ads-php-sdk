<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class FulltimeTargeting extends Model
{
    /**
     * @var string
     */
    public $flags;

    /**
     * @var int
     */
    public $fri;

    /**
     * @var int
     */
    public $mon;

    /**
     * @var int
     */
    public $sat;

    /**
     * @var int
     */
    public $sun;

    /**
     * @var int
     */
    public $thu;

    /**
     * @var int
     */
    public $tue;

    /**
     * @var int
     */
    public $wed;
}