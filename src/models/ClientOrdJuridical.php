<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class ClientOrdJuridical extends Model
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
     * @var OrdSubAgent[]
     */
    public $sub_agents;

    /**
     * @var string
     */
    public $user_type;

    /**
     * @var bool
     */
    public $vat;
}