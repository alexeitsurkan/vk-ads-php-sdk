<?php

namespace VkAdsPhpSdk\services\banners\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class BannerSelectionCriteria extends SelectionCriteria
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
     * @var int
     */
    public $_ad_group_id;

    /**
     * @var int[]
     */
    public $_ad_group_id__in;

    /**
     * @var string
     */
    public $_ad_group_status;

    /**
     * @var string[]
     */
    public $_ad_group_status__ne;

    /**
     * @var string[]
     */
    public $_ad_group_status__in;

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
    public $_updated__gt;
    
    /**
     * @var string
     */
    public $_updated__gte;
    
    /**
     * @var string
     */
    public $_updated__lt;
    
    /**
     * @var string
     */
    public $_updated__lte;

    /**
     * @var string
     */
    public $_url;
    
    /**
     * @var string
     */
    public $_textblock;
}