<?php

namespace app\vk_ads_api\src\services\user\models;

use app\vk_ads_api\src\components\Model;
use app\vk_ads_api\src\models\AdditionalUserInfo;
use app\vk_ads_api\src\models\Agency;
use app\vk_ads_api\src\models\UserEmailSettings;
use app\vk_ads_api\src\models\UserRegions;

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