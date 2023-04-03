<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

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