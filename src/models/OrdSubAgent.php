<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class OrdSubAgent extends Model
{
    /**
     * @var string
     */
    public $contract_date;
    
    /**
     * @var string
     */
    public $contract_number;

    /**
     * @var string
     */
    public $contract_subject;

    /**
     * @var string
     */
    public $contract_type;

    /**
     * @var string
     */
    public $inn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $user_type;

    /**
     * @var bool
     */
    public $vat;
}