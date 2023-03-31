<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class RemarketingUsersListHistory extends Model
{
    /**
     * @var string
     */
    public $created;

    /**
     * @var int
     */
    public $diff;

    /**
     * @var string
     */
    public $status;
}