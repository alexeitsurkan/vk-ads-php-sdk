<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserGetItem extends Model
{
    /**
     * object
     */
    public $account;

    /**
     * @var int
     */
    public $active_banners;

    /**
     * @var string[]
     */
    public $additional_emails;

    /**
     * @var AdditionalUserInfo
     */
    public $additional_info;

    /**
     * @var Agency
     */
    public $agency;

    /**
     * @var string
     */
    public $agency_username;

    /**
     * @var string
     */
    public $branch_username;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $email;

    /**
     * @var UserEmailSettings[]
     */
    public $email_settings;

    /**
     * @var string
     */
    public $firstname;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $info_currency;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $lastname;

    /**
     * object
     */
    public $mailings;

    /**
     * @var int
     */
    public $max_active_banners;

    /**
     * object
     */
    public $permissions;

    /**
     * @var UserRegions
     */
    public $regions;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $types;

    /**
     * @var string
     */
    public $username;
}