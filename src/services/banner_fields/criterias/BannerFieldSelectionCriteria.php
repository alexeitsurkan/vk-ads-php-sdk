<?php

namespace app\vk_ads_api\src\services\banner_fields\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class BannerFieldSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 20;

    /**
     * @var int
     */
    public $offset = 0;
}