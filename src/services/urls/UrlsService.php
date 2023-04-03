<?php

namespace VkAdsPhpSdk\services\urls;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\exceptions\UnknownPropertyException;
use VkAdsPhpSdk\services\urls\models\URLAddItem;
use VkAdsPhpSdk\services\urls\models\URLGetItem;
use GuzzleHttp\Psr7\Request;

class UrlsService extends BaseService
{
    public function read(array $ids)
    {
        if(empty($ids)){
            throw new UnknownPropertyException();
        }
        
        $request        = new Request('get', self::getUri(implode(',',$ids)), $this->getHeaders());
        $response       = $this->call($request);
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