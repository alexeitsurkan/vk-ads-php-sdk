<?php

namespace VkAdsPhpSdk\enum;

use VkAdsPhpSdk\components\Enum;

class ScopeClientEnum extends Enum
{
    public const READ_ADS      = 'read_ads';
    public const READ_PAYMENTS = 'read_payments';
    public const CREATE_ADS    = 'create_ads';
}