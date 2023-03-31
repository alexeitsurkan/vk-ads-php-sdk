<?php

namespace app\vk_ads_api\src\services\statistics;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\exceptions\VkAdsApiException;
use app\vk_ads_api\src\services\statistics\criterias\StatisticGoalSelectionCriteria;
use app\vk_ads_api\src\services\statistics\criterias\StatisticInappSelectionCriteria;
use app\vk_ads_api\src\services\statistics\criterias\StatisticOfflineConversionsSelectionCriteria;
use app\vk_ads_api\src\services\statistics\criterias\StatisticSelectionCriteria;
use app\vk_ads_api\src\services\statistics\enum\StatisticObjectEnum;

class StatisticsService extends BaseService
{
    /**
     * Общая статистика с пагинацией
     * @param StatisticObjectEnum $obj
     * @param StatisticSelectionCriteria $selectionCriteria
     * @return array
     * @throws VkAdsApiException
     */
    public function get(
        StatisticObjectEnum $obj,
        StatisticSelectionCriteria $selectionCriteria
    ):array {
        return $this->doGet("/api/v3/statistics/$obj/day.json",selectionCriteria: $selectionCriteria);
    }

    /**
     * Статистика по событиям внутри приложения
     * @param StatisticObjectEnum $obj
     * @param StatisticInappSelectionCriteria $selectionCriteria
     * @return array
     * @throws VkAdsApiException
     */
    public function getInapp(
        StatisticObjectEnum $obj,
        StatisticInappSelectionCriteria $selectionCriteria
    ):array
    {
        return $this->doGet("/api/v2/statistics/inapp/$obj/day.json",selectionCriteria: $selectionCriteria);
    }

    /**
     * Статистика по целям
     * @param StatisticObjectEnum $obj
     * @param StatisticGoalSelectionCriteria $selectionCriteria
     * @return array
     * @throws VkAdsApiException
     */
    public function getGoals(
        StatisticObjectEnum $obj,
        StatisticGoalSelectionCriteria $selectionCriteria
    ) {
        return $this->doGet("/api/v2/statistics/goals/$obj/day.json",selectionCriteria: $selectionCriteria);
    }

    /**
     * Статистика по целям
     */
    public function getOfflineConversions(
        StatisticOfflineConversionsSelectionCriteria $selectionCriteria
    ) {
        return $this->doGet("api/v2/statistics/offline_conversions/ad_groups/day.json",selectionCriteria: $selectionCriteria);
    }
}