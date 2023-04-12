<?php

namespace VkAdsPhpSdk\services\statistics;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\VkAdsApiException;
use VkAdsPhpSdk\services\statistics\criterias\StatisticGoalSelectionCriteria;
use VkAdsPhpSdk\services\statistics\criterias\StatisticInappSelectionCriteria;
use VkAdsPhpSdk\services\statistics\criterias\StatisticOfflineConversionsSelectionCriteria;
use VkAdsPhpSdk\services\statistics\criterias\StatisticSelectionCriteria;
use VkAdsPhpSdk\services\statistics\criterias\TotalStatisticSelectionCriteria;
use VkAdsPhpSdk\services\statistics\enum\StatisticObjectEnum;

class StatisticsService extends BaseService
{
    /**
     * статистика
     * @param StatisticObjectEnum $obj
     * @param StatisticSelectionCriteria $selectionCriteria
     * @return array
     * @throws VkAdsApiException
     */
    public function get(
        StatisticObjectEnum $obj,
        StatisticSelectionCriteria $selectionCriteria
    ):array {
        return $this->doGet("/api/v2/statistics/$obj/day.json",selectionCriteria: $selectionCriteria);
    }

    /**
     * Общая статистика с пагинацией
     * @param StatisticObjectEnum $obj
     * @param TotalStatisticSelectionCriteria $selectionCriteria
     * @return array
     * @throws VkAdsApiException
     */
    public function getTotal(
        StatisticObjectEnum $obj,
        TotalStatisticSelectionCriteria $selectionCriteria
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