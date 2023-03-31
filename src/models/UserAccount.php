<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class UserAccount extends Model
{
    /**
     * @var float
     */
    public $a_balance;

    /**
     * @var float
     */
    public $balance;

    /**
     * @var float
     */
    public $currency_balance_hold;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $type;
}