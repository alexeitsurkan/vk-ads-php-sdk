<?php

namespace app\vk_ads_api\src\services\mobile_os;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\mobile_os\models\MobileOperationSystem;

class MobileOperationSystemService extends BaseService
{
    public function get():array
    {
        return $this->doGet('/api/v2/mobile_os.json',MobileOperationSystem::class);
    }
}