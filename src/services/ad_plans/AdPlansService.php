<?php

namespace VkAdsPhpSdk\services\ad_plans;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\VkAdsApiException;
use VkAdsPhpSdk\services\ad_plans\criterias\AdPlanSelectionCriteria;
use VkAdsPhpSdk\models\AdPlanAddItem;
use VkAdsPhpSdk\models\AdPlanGetItem;
use VkAdsPhpSdk\models\AdPlanMassAction;
use VkAdsPhpSdk\models\AdPlanUpdateItem;

class AdPlansService extends BaseService
{
    /**
     * @param AdPlanSelectionCriteria $selectionCriteria
     * @return array
     */
    public function get(AdPlanSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet(self::getUri(), AdPlanGetItem::class, $selectionCriteria);
    }

    /**
     * @param AdPlanAddItem $adPlanAddItem
     * @return array
     */
    public function create(AdPlanAddItem $adPlanAddItem): array
    {
        return $this->doPost(self::getUri(), $adPlanAddItem);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->doDelete(self::getUri($id));
    }

    /**
     * @param int $id
     * @param AdPlanUpdateItem $adPlanUpdateItem
     * @return bool
     */
    public function update(int $id, AdPlanUpdateItem $adPlanUpdateItem): bool
    {
        $this->doPost(self::getUri($id), $adPlanUpdateItem);
        return true;
    }

    /**
     * @param AdPlanMassAction[] $adPlanMassActions
     * @return bool
     * @throws VkAdsApiException
     */
    public function massUpdate(array $adPlanMassActions): bool
    {
        if (count($adPlanMassActions) >= 200) {
            throw new VkAdsApiException('Не более 200 кампаний за раз');
        }
        return $this->doMassUpdate(self::getUri('mass_action'), $adPlanMassActions);
    }

    /**
     * @param int|string|null $replace
     * @return string
     */
    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v2/ad_plans{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}