<?php

namespace VkAdsPhpSdkmodels;

use VkAdsPhpSdk\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class BannerMassAction extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=1,
     *     max=2147483647
     * )
     */
    public $id;

    /**
     * @var string
     * [Assert\Choice(['active', 'deleted', 'blocked'])]
     */
    public $status;
}