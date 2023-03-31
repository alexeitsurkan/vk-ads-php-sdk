<?php

namespace app\vk_ads_api\src\services\user_geo\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class UserGeoSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 20;

    /**
     * @var int
     */
    public $offset = 0;

    /**
     * @var int
     */
    public $_id;
    
    /**
     * @var int[]
     */
    public $_id__in;

    /**
     * @var string
     */
    public $_q;
}