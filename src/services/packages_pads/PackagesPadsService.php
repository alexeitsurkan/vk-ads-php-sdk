<?php

namespace app\vk_ads_api\src\services\packages_pads;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\packages_pads\models\PackagePad;
use GuzzleHttp\Psr7\Request;

class PackagesPadsService extends BaseService
{
    public function get(): array
    {
        $request                 = new Request('get', '/api/v2/packages_pads.json', $this->getHeaders());
        $response                = $this->call($request);
        $response->body['items'] = $this->mapArray($response->body['items'], PackagePad::class);

        return $response->body;
    }
}