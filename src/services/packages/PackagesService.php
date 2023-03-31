<?php

namespace app\vk_ads_api\src\services\packages;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\models\Package;
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