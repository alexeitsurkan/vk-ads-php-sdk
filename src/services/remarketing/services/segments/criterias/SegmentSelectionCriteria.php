<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class SegmentSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $limit = 100;

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
    public $_name;

    /**
     * @var string
     */
    public $_name__startswith;
}