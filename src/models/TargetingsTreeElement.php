<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class TargetingsTreeElement extends Model
{
    /**
     * @var object[]
     */
    public $children;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $synonyms;
}