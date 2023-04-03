<?php

namespace VkAdsPhpSdk\services\google_apps;

use VkAdsPhpSdk\components\BaseService;
use GuzzleHttp\Psr7\Request;

class GoogleAppsService extends BaseService
{
    public function get(string $app_name)
    {
        return $this->doGet("/api/v2/google_apps/$app_name.json");
    }

    public function update(string$app_name)
    {
        $request  = new Request('post', "/api/v2/google_apps/$app_name.json", $this->getHeaders());
        $response = $this->call($request);

        return $response->body;
    }
}