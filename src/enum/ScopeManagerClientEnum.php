<?php

namespace app\vk_ads_api\src\enum;

use app\vk_ads_api\src\components\Enum;

class ScopeManagerClientEnum extends Enum
{
    public const READ_MANAGER_CLIENTS = 'read_manager_clients';
    public const EDIT_MANAGER_CLIENTS = 'edit_manager_clients';
    public const READ_PAYMENTS        = 'read_payments';
}