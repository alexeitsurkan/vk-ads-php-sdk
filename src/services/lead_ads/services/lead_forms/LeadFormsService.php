<?php

namespace VkAdsPhpSdk\services\lead_ads\services\lead_forms;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\lead_ads\services\lead_forms\criterias\LeadFormSelectionCriteria;
use VkAdsPhpSdk\services\lead_ads\services\lead_forms\criterias\LeadsExportSelectionCriteria;
use VkAdsPhpSdk\services\lead_ads\services\lead_forms\enum\LeadsExportFormatEnum;
use VkAdsPhpSdk\models\LeadFormGetItem;
use VkAdsPhpSdk\models\LeadFormsListElement;
use VkAdsPhpSdk\models\LeadFormUpdateItem;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;

class LeadFormsService extends BaseService
{
    public function getOne(int $id, int $get_active_form_ad_plans = 0)
    {
        return $this->doGet(
            self::getUri($id) . "?get_active_form_ad_plans=$get_active_form_ad_plans",
            LeadFormGetItem::class
        );
    }

    public function get(LeadFormSelectionCriteria $selectionCriteria)
    {
        return $this->doGet(self::getUri(), LeadFormsListElement::class, $selectionCriteria);
    }

    public function update(int $id, LeadFormUpdateItem $model):bool
    {
        $this->doPost(self::getUri($id), $model);
        return true;
    }

    public function archive(array $ids):array
    {
        $uri      = '/api/v1/lead_ads/lead_forms/archive?_form_ids__in=' . implode(',', $ids);
        $response = $this->call('post', $uri,[RequestOptions::HEADERS => $this->getHeaders()]);
        return $this->mapArray($response->body['items'], LeadFormGetItem::class);
    }

    public function unarchive($ids):array
    {
        $uri      = '/api/v1/lead_ads/lead_forms/unarchive?_form_ids__in=' . implode(',', $ids);
        $response = $this->call('post', $uri, [RequestOptions::HEADERS => $this->getHeaders()]);
        return $this->mapArray($response->body['items'], LeadFormGetItem::class);
    }

    public function leadsExport(
        int $id,
        string $format = LeadsExportFormatEnum::CSV,
        LeadsExportSelectionCriteria $selectionCriteria = null
    ) {
        $uri      = "/api/v1/lead_ads/lead_forms/$id/leads.$format";
        $uri = $selectionCriteria
            ? Uri::withQueryValues(new Uri($uri), $selectionCriteria())
            : $uri;

        $response = $this->call('post', $uri,[RequestOptions::HEADERS => $this->getHeaders()]);

        return $response->body;
    }

    /**
     * @param int|string|null $replace
     * @return string
     */
    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v1/lead_ads/lead_forms{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}