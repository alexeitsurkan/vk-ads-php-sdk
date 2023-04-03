<?php

namespace VkAdsPhpSdk\services\packages;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\Package;
use GuzzleHttp\Psr7\Request;

class PackagesService extends BaseService
{
    public function get(): array
    {
        $request                 = new Request('get', '/api/v2/packages.json', $this->getHeaders());
        $response                = $this->call($request);
        $response->body['items'] = $this->mapArray($response->body['items'], Package::class);

        return $response->body;
    }
}