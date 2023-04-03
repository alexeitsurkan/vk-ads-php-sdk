<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class TransactionGroup extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var int
     */
    public $client_id;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $first_at;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $invoices;

    /**
     * @var bool
     */
    public $is_commercial;

    /**
     * @var string
     */
    public $last_at;

    /**
     * @var int
     */
    public $object_id;

    /**
     * @var string
     */
    public $object_type;

    /**
     * @var float
     */
    public $payments_total;

    /**
     * @var string
     */
    public $receipt;

    /**
     * @var float
     */
    public $tax_amount;

    /**
     * @var string
     */
    public $type;
}