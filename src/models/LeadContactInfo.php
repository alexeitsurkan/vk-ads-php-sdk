<?php

namespace VkAdsPhpSdk\models;

use VkAdsPhpSdk\components\Model;

class LeadContactInfo extends Model
{
    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string
     */
    public $last_name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $age;

    /**
     * @var string
     */
    public $birth_date;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $address;
}