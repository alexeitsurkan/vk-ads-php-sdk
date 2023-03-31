<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class TargetingsTree extends Model
{
    /**
     * @var TargetingsTreeElement
     */
    public $interests_short;

    /**
     * @var TargetingsTreeElement
     */
    public $interests_soc_dem;

    /**
     * @var TargetingsTreeElement
     */
    public $interests_stable;
}