<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;
use VkAdsPhpSdk\models\AdditionalUserInfo;
use VkAdsPhpSdk\models\Agency;
use VkAdsPhpSdk\models\UserEmailSettings;
use VkAdsPhpSdk\models\UserRegions;

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
     * @var UserEmailSettings
     * @Assert\Valid()
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
     * @var object
     */
    public $mailings;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;
}