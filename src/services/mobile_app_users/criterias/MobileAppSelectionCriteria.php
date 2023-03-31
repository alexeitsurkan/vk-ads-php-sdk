<?php

namespace app\vk_ads_api\src\services\mobile_app_users\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class MobileAppSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 50;

    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var string[]
     */
    public $fields;
}