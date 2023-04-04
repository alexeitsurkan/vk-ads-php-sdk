<?php

namespace VkAdsPhpSdk\services\packages;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\Package;

class PackagesService extends BaseService
{
    public function get(): array
    {
        $response                = $this->call('get', '/api/v2/packages.json',[RequestOptions::HEADERS => $this->getHeaders()]);
        $response->body['items'] = $this->mapArray($response->body['items'], Package::class);

        return $response->body;
    }
}