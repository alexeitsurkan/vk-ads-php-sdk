<?php

namespace VkAdsPhpSdk\services\agency_managers\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;


class AgencyManagersSelectionCriteria extends SelectionCriteria
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
     * @var int
     */
    public $_user__id;

    /**
     * @var int[]
     */
    public $_user__id__in;

    /**
     * @var string
     */
    public $_user__username;

    /**
     * @var string[]
     */
    public $_user__username__in;

    /**
     * @var string
     */
    public $_user__status;

    /**
     * @var string
     */
    public $_user__status__ne;

    /**
     * @var string[]
     */
    public $_user__status__in;

    /**
     * @var string
     */
    public $_status;

    /**
     * @var string
     */
    public $_status__ne;

    /**
     * @var string[]
     */
    public $_status__in;
}