<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserClient extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $username;

    /**
     * @var UserAccount
     */
    public $account;

    /**
     * @var string[]
     */
    public $additional_emails;

    /**
     * @var AdditionalClientInfo
     */
    public $additional_info;
}