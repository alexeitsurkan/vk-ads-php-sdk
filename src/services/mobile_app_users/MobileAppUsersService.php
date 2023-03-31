<?php

namespace app\vk_ads_api\src\services\mobile_app_users;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_app_users\criterias\MobileAppSelectionCriteria;
use app\vk_ads_api\src\services\mobile_app_users\models\MobileApps;

class MobileAppUsersService extends BaseService
{
    public function get(MobileAppSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/mobile_app_users.json', MobileApps::class, $selectionCriteria);
    }
}