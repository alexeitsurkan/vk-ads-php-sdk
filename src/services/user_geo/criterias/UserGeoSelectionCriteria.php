<?php

namespace VkAdsPhpSdk\services\user_geo\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

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