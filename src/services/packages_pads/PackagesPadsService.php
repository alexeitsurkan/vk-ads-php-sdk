<?php

namespace VkAdsPhpSdk\services\packages_pads;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\PackagePad;
use GuzzleHttp\Psr7\Request;

class PackagesPadsService extends BaseService
{
    public function get(): array
    {
        $response                = $this->call('get', '/api/v2/packages_pads.json',[RequestOptions::HEADERS => $this->getHeaders()]);
        $response->body['items'] = $this->mapArray($response->body['items'], PackagePad::class);

        return $response->body;
    }
}