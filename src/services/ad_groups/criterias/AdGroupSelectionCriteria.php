<?php

namespace VkAdsPhpSdk\services\ad_groups\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class AdGroupSelectionCriteria extends SelectionCriteria
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
     * @var string[]
     */
    public $fields;

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
    public $_status;

    /**
     * @var string[]
     */
    public $_status__ne;

    /**
     * @var string[]
     */
    public $_status__in;

    /**
     * @var string
     */
    public $_last_updated__gt;
    
    /**
     * @var string
     */
    public $_last_updated__gte;
    
    /**
     * @var string
     */
    public $_last_updated__lt;
    
    /**
     * @var string
     */
    public $_last_updated__lte;

    /**
     * @var string|string[]
     */
    public $sorting;
}