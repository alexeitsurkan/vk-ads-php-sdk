<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class TransactionAddItem extends Model
{
    /**
     * @var float
     * @Assert\NotBlank()
     */
    public $amount;
}