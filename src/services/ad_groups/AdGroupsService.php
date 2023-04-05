<?php

namespace VkAdsPhpSdk\services\ad_groups;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\VkAdsApiException;
use VkAdsPhpSdk\services\ad_groups\criterias\AdGroupSelectionCriteria;
use VkAdsPhpSdkmodels\AdGroupAddItem;
use VkAdsPhpSdkmodels\AdGroupGetItem;
use VkAdsPhpSdkmodels\AdGroupMassAction;
use VkAdsPhpSdkmodels\AdGroupUpdateItem;

class AdGroupsService extends BaseService
{
    /**
     * @param AdGroupSelectionCriteria $selectionCriteria
     * @return array
     */
    public function get(AdGroupSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet(self::getUri(), AdGroupGetItem::class, $selectionCriteria);
    }

    /**
     * @param AdGroupAddItem $adGroupAddItem
     * @return array
     */
    public function create(AdGroupAddItem $adGroupAddItem): array
    {
        return $this->doPost(self::getUri(), $adGroupAddItem);
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
     * @param AdGroupUpdateItem $adGroupUpdateItem
     * @return bool
     */
    public function update(int $id, AdGroupUpdateItem $adGroupUpdateItem): bool
    {
        $this->doPost(self::getUri($id), $adGroupUpdateItem);
        return true;
    }

    /**
     * @param AdGroupMassAction[] $adGroupMassActions
     * @return bool
     * @throws VkAdsApiException
     */
    public function massUpdate(array $adGroupMassActions): bool
    {
        if (count($adGroupMassActions) >= 200) {
            throw new VkAdsApiException('Не более 200 групп за раз');
        }
        return $this->doMassUpdate(self::getUri('mass_action'), $adGroupMassActions);
    }

    /**
     * @param int|string|null $replace
     * @return string
     */
    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v2/ad_groups{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}