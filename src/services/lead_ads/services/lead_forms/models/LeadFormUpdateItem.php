<?php

namespace VkAdsPhpSdk\services\lead_ads\services\lead_forms\models;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class LeadFormUpdateItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=255
     * )
     */
    public $name;

    /**
     * @var int
     * [Assert\Choice([0, 1,2])]
     */
    public $status;

    /**
     * @var string
     * @Assert\NotBlank()
     * [Assert\Choice(['compact', 'long_text', 'long_text'])]
     */
    public $first_screen_type;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=50
     * )
     */
    public $title;

    /**
     * @var string
     * @Assert\Length(
     *     max=35
     * )
     */
    public $description;

    /**
     * @var string
     * @Assert\Length(
     *     max=350
     * )
     */
    public $long_description;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=30
     * )
     */
    public $company_title;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $logo_id;

    /**
     * @var Award
     * @Assert\Valid()
     */
    public $award;

    /**
     * @var int
     * [Assert\Choice([0,1,2,3,4,5,6])]
     */
    public $gradient;

    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $contact_fields;

    /**
     * @var ResultInfo
     * @Assert\Valid()
     * @Assert\NotBlank()
     */
    public $result_info;

    /**
     * @var Agreement
     * @Assert\Valid()
     * @Assert\NotBlank()
     */
    public $agreement;

    /**
     * @var Notification[]
     */
    public $notifications;

    /**
     * @var Page[]
     */
    public $pages;
}