<?php

namespace VkAdsPhpSdk\services\billing;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\TransactionGroup;
use VkAdsPhpSdk\services\billing\criterias\TransactionGroupSelectionCriteria;
use VkAdsPhpSdk\services\billing\services\transactions\TransactionsService;

class BillingService extends BaseService
{
    /**
     * @var TransactionsService
     */
    private $transactionsService;

    public function getTransactionsService(): TransactionsService
    {
        if (!$this->transactionsService) {
            $this->transactionsService = new TransactionsService($this->token);
        }
        return $this->transactionsService;
    }

    public function getTransactionGroups(TransactionGroupSelectionCriteria $selectionCriteria)
    {
        $this->doGet('/api/v2/billing/transaction_groups.json', TransactionGroup::class, $selectionCriteria);
    }
}