<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class TransactionAddItem extends Model
{
    /**
     * @var float
     * @Assert\NotBlank()
     */
    public $amount;
}