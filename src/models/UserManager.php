<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

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