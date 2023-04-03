<?php

namespace VkAdsPhpSdk\services\regions\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

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