<?php

namespace app\vk_ads_api\src\enum;

use app\vk_ads_api\src\components\Enum;

class ScopeAgencyClientEnum extends Enum
{
    public const CREATE_CLIENTS         = 'create_clients';
    public const READ_CLIENTS           = 'read_clients';
    public const CREATE_AGENCY_PAYMENTS = 'create_agency_payments';
}