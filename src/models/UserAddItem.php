<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserAddItem extends Model
{
    /**
     * @var string[]
     */
    public $additional_emails;

    /**
     * @var AdditionalUserInfo
     * @Assert\Valid()
     */
    public $additional_info;

    /**
     * @var UserEmailSettings[]
     */
    public $email_settings;

    /**
     * @var string
     */
    public $info_currency;

    /**
     * @var string
     * [Assert\Choice(['ru', 'en'])]
     */
    public $language;

    /**
     * object
     */
    public $mailings;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;
}