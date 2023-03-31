<?php

namespace app\vk_ads_api\src\models;

use app\vk_ads_api\src\components\Model;

class ClientOrdPhysical extends Model
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
    public $phone;

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