<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class NestedUser extends Model
{
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
     * @var string[]
     */
    public $available_mailings;

    /**
     * @var string
     */
    public $branch_username;

    /**
     * @var string
     */
    public $email;

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
    public $language;

    /**
     * @var string
     */
    public $lastname;

    /**
     * @var string[]
     */
    public $mailings;

    /**
     * @var Partner
     */
    public $partner;

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