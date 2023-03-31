<?php

namespace app\vk_ads_api\src\services\user;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\user\models\UserAddItem;
use app\vk_ads_api\src\services\user\models\UserGetItem;

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