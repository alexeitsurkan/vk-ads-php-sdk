<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Targetings extends Model
{
    /**
     * @var AgeTargeting
     */
    public $age;

    /**
     * @var BirthdayTargeting
     */
    public $birthday;

    /**
     * @var FulltimeTargeting
     */
    public $fulltime;

    /**
     * @var GeoTargeting
     */
    public $geo;

    /**
     * @var string
     */
    public $group_members;

    /**
     * @var int[]
     */
    public $interests;

    /**
     * @var int[]
     */
    public $interests_soc_dem;

    /**
     * @var int[]
     */
    public $interests_stable;

    /**
     * @var LocalGeoTargeting
     */
    public $local_geo;

    /**
     * @var string
     */
    public $mobile_apps;

    /**
     * @var int[]
     */
    public $mobile_operation_systems;

    /**
     * @var int[]
     */
    public $mobile_operators;

    /**
     * @var string[]
     */
    public $mobile_prefix;

    /**
     * @var string[]
     */
    public $mobile_types;

    /**
     * @var int[]
     */
    public $mobile_vendors;

    /**
     * @var PadCategoryTargeting
     */
    public $pad_category;

    /**
     * @var int[]
     */
    public $pads;

    /**
     * @var int[]
     */
    public $regions;

    /**
     * @var int[]
     */
    public $segments;

    /**
     * @var string[]
     */
    public $sex;

    /**
     * @var MobileOperatingSystemsSkAdNetworkTargeting
     */
    public $mobile_operation_systems_sk_ad_network;
}