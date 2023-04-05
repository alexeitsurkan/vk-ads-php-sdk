<?php

namespace VkAdsPhpSdk\services\banners;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\VkAdsApiException;
use VkAdsPhpSdk\services\banners\criterias\BannerSelectionCriteria;
use VkAdsPhpSdkmodels\BannerAddItem;
use VkAdsPhpSdkmodels\BannerGetItem;
use VkAdsPhpSdkmodels\BannerMassAction;
use VkAdsPhpSdkmodels\BannerRemoderateGetItem;
use VkAdsPhpSdkmodels\BannerUpdateItem;
use GuzzleHttp\Psr7\Request;

class BannersService extends BaseService
{
    /**
     * @param BannerSelectionCriteria $selectionCriteria
     * @return array
     */
    public function get(BannerSelectionCriteria $selectionCriteria): array
    {
        return $this->doGet(self::getUri(), BannerGetItem::class, $selectionCriteria);
    }

    /**
     * @param BannerAddItem $bannerAddItem
     * @return array
     */
    public function create(BannerAddItem $bannerAddItem): array
    {
        return $this->doPost(self::getUri(), $bannerAddItem);
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
     * @param BannerUpdateItem $bannerUpdateItem
     * @return bool
     */
    public function update(int $id, BannerUpdateItem $bannerUpdateItem): bool
    {
        $this->doPost(self::getUri($id), $bannerUpdateItem);
        return true;
    }

    /**
     * @param BannerMassAction[] $bannerMassActions
     * @return bool
     * @throws VkAdsApiException
     */
    public function massUpdate(array $bannerMassActions): bool
    {
        if (count($bannerMassActions) >= 200) {
            throw new VkAdsApiException('Не более 200 кампаний за раз');
        }
        return $this->doMassUpdate(self::getUri('mass_action'), $bannerMassActions);
    }

    /**
     * @param int[] $ids
     * @return array
     * @throws VkAdsApiException
     */
    public function remoderate(array $ids):array
    {
        $models = [];
        foreach ($ids as $id){
            $obj = new \stdClass();
            $obj->id = $id;
            $models[] = $obj;
        }
        $uri = self::getUri('remoderate').'?fields=id,remoderated';
        $options = [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::BODY => $this->getBody($models)
        ];
        $response = $this->call('post', $uri, $options);

        return $this->mapArray($response->body['banners'], BannerRemoderateGetItem::class);
    }

    /**
     * @param int|string|null $replace
     * @return string
     */
    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v2/banners{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}