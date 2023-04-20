<?php

namespace VkAdsPhpSdk\services\billing\services\transactions;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\TransactionAddItem;
use VkAdsPhpSdk\models\TransactionGetItem;
use VkAdsPhpSdk\services\billing\services\transactions\enum\TransactionModeEnum;

class TransactionsService extends BaseService
{
    public function post(int $user_id, TransactionModeEnum $mode, TransactionAddItem $model)
    {
        $response = $this->doPost("/api/v2/billing/transactions/$mode/$user_id.json", $model);
        return $this->map($response, TransactionGetItem::class);
    }
}