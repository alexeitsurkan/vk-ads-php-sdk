<?php

namespace app\vk_ads_api\src\services\banner_patterns;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\banner_patterns\criterias\BannerPatternSelectionCriteria;
use app\vk_ads_api\src\services\banner_patterns\models\BannerPattern;

class BannerPatternsService extends BaseService
{
    public function get(BannerPatternSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/banner_patterns.json', BannerPattern::class, $selectionCriteria);
    }
}