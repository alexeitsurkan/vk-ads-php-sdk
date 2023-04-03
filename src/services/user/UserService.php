<?php

namespace VkAdsPhpSdk\services\user;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\user\models\UserAddItem;
use VkAdsPhpSdk\services\user\models\UserGetItem;

class UserService extends BaseService
{
    public function get()
    {
        return $this->doGet('/api/v3/user.json',UserGetItem::class);
    }

    public function create(UserAddItem $model)
    {
        return $this->doPost('/api/v3/user.json',$model);
    }
}