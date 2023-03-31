<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

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