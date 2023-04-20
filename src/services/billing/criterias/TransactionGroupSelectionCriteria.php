<?php

namespace VkAdsPhpSdk\services\billing\criterias;

use VkAdsPhpSdk\components\SelectionCriteria;

class TransactionGroupSelectionCriteria extends SelectionCriteria
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
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $first_at;

    /**
     * @var string
     */
    public $last_at;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $object_id;

    /**
     * @var string
     */
    public $object_type;

    /**
     * @var string|string[]
     */
    public $sorting;
}