<?php

namespace VkAdsPhpSdk\services\content;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\services\content\models\Content;
use GuzzleHttp\Psr7\Request;
use VkAdsPhpSdk\components\BaseService;

class ContentService extends BaseService
{
    public function load(string $content_type)
    {
        //todo a.curkan доделать https://ads.vk.com/doc/api/resource/Content
//        $headers = $this->getHeaders();
//        $headers['Content-Type'] = 'multipart/form-data';
//        $options = [
//            RequestOptions::HEADERS => $headers,
//        ];
//        $response = $this->call('post', self::getUri($content_type), $options);
//        $response->body['items'] = $this->mapArray($response->body['items'], Content::class);
//
//        return $response->body;
    }

    private static function getUri(int|string $replace = null): string
    {
        $uri_template = '/api/v2/content{replace}.json';
        $replace      = $replace !== null ? '/' . $replace : '';
        return str_replace('{replace}', $replace, $uri_template);
    }
}