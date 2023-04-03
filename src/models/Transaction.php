<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Transaction extends Model
{
    /**
     * @var float
     */
    public $agency_balance;

    /**
     * @var float
     */
    public $amount;

    /**
     * @var float
     */
    public $client_balance;

    /**
     * @var string
     */
    public $client_username;

    /**
     * @var string
     */
    public $created_at;
}