<?php

namespace VkAdsPhpSdk\services\google_apps;

use GuzzleHttp\RequestOptions;
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
        $response = $this->call('post', "/api/v2/google_apps/$app_name.json",[
            RequestOptions::HEADERS => $this->getHeaders()
        ]);

        return $response->body;
    }
}