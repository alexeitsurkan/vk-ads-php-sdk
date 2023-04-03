<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class UserManager extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var AdditionalManagerInfo[]
     */
    public $additional_info;

    /**
     * @var ManagerClientInfo[]
     */
    public $clients;

    /**
     * @var string
     */
    public $username;
}