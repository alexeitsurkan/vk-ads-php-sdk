<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class Package extends Model
{
    /**
     * @var int
     */
    public $banner_format_id;

    /**
     * @var string
     */
    public $banner_url_get_params;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var float
     */
    public $max_price_per_unit;

    /**
     * @var int
     */
    public $max_uniq_shows_limit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $objective;

    /**
     * @var object
     */
    public $options;

    /**
     * @var string
     */
    public $package_request;

    /**
     * @var int
     */
    public $pads_tree_id;

    /**
     * @var int
     */
    public $paid_event_type;

    /**
     * @var float
     */
    public $price;

    /**
     * @var int
     */
    public $priced_event_type;

    /**
     * @var int[]
     */
    public $related_package_ids;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var object
     */
    public $url_types;
}