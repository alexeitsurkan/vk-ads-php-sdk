<?php

namespace app\vk_ads_api\src\services\banner_patterns\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class BannerPatternSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 10;

    /**
     * @var int
     */
    public $offset = 0;
}