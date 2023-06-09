<?php

namespace VkAdsPhpSdk\services\urls;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\UnknownPropertyException;
use VkAdsPhpSdk\models\URLAddItem;
use VkAdsPhpSdk\models\URLGetItem;
use GuzzleHttp\Psr7\Request;

class UrlsService extends BaseService
{
    public function read(array $ids)
    {
        if(empty($ids)){
            throw new UnknownPropertyException();
        }

        $response       = $this->call('get', self::getUri(implode(',',$ids)),[RequestOptions::HEADERS => $this->getHeaders()]);
        return $this->mapArray($response->body['items'], URLGetItem::class);
    }

    public function create(URLAddItem $URLAddItem): array
    {
        return $this->doPost(self::getUri(),$URLAddItem);
    }

    /**
     * @param int|string|null $replace
     * @return string
     */
    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v2/urls{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}