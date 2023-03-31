<?php

namespace app\vk_ads_api\src\services\regions\criterias;

use app\vk_ads_api\src\components\SelectionCriteria;

class RegionSelectionCriteria extends SelectionCriteria
{
    /**
     * @var int
     */
    public $_id;

    /**
     * @var int[]
     */
    public $_id__in;

    /**
     * @var int
     */
    public $_parent_id;

    /**
     * @var int[]
     */
    public $_parent_id__in;

    /**
     * @var string
     */
    public $_q;

    /**
     * @var string
     */
    public $_flags;

    /**
     * @var string[]
     */
    public $_flags__in;
}