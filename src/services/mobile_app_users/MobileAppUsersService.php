<?php

namespace VkAdsPhpSdk\services\mobile_app_users;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\mobile_app_users\criterias\MobileAppSelectionCriteria;
use VkAdsPhpSdk\models\MobileApps;

class MobileAppUsersService extends BaseService
{
    public function get(MobileAppSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/mobile_app_users.json', MobileApps::class, $selectionCriteria);
    }
}