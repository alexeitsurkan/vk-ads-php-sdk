<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\CounterGoal;
use VkAdsPhpSdk\models\Goal;

class Goals extends Model
{
    /**
     * @var Goal[]
     */
    public $mobile_install;

    /**
     * @var Goal[]
     */
    public $ok_game;

    /**
     * @var Goal[]
     */
    public $ok_group;

    /**
     * @var CounterGoal[]
     */
    public $topmailru;
}