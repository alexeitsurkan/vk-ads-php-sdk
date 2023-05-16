<?php

namespace VkAdsPhpSdk\services\agency_managers\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;


class AgencyManagerSelectionCriteria extends SelectionCriteria
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
     * @var string
     */
    public $_manager__username;

    /**
     * @var string[]
     */
    public $_manager__username__in;

    /**
     * @var int
     */
    public $_manager__id;

    /**
     * @var int[]
     */
    public $_manager__id__in;
}