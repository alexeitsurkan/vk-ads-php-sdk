<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class TargetingsTreeElement extends Model
{
    /**
     * object[]
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