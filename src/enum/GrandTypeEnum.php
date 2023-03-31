<?php

namespace app\vk_ads_api\src\enum;

use app\vk_ads_api\src\components\Enum;

class GrandTypeEnum extends Enum
{
    public const CLIENT_CREDENTIALS        = 'client_credentials';
    public const AGENCY_CLIENT_CREDENTIALS = 'agency_client_credentials';
    public const AUTHORIZATION_CODE        = 'authorization_code';
    public const REFRESH_TOKEN             = 'refresh_token';
}