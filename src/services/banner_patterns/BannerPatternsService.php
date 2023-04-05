<?php

namespace VkAdsPhpSdk\services\banner_patterns;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\banner_patterns\criterias\BannerPatternSelectionCriteria;
use VkAdsPhpSdkmodels\BannerPattern;

class BannerPatternsService extends BaseService
{
    public function get(BannerPatternSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/banner_patterns.json', BannerPattern::class, $selectionCriteria);
    }
}