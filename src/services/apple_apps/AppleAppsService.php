<?php

namespace VkAdsPhpSdk\services\apple_apps;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\apple_apps\models\SkAdNetworkIdsAddItem;
use GuzzleHttp\Psr7\Request;

class AppleAppsService extends BaseService
{
    public function skAdNetworkIdentityShare($id, SkAdNetworkIdsAddItem $model)
    {
        $request = new Request(
            'post',
            "/api/v2/apple_apps/$id/sk_ad_network_ids/share.json",
            $this->getHeaders(),
            $this->getBody($model)
        );
        $this->call($request);

        return true;
    }

    public function skAdNetworkIdentityWithdraw($id, SkAdNetworkIdsAddItem $model)
    {
        $request = new Request(
            'post',
            "/api/v2/apple_apps/$id/sk_ad_network_ids/withdraw.json",
            $this->getHeaders(),
            $this->getBody($model)
        );
        $this->call($request);

        return true;
    }

    public function get($app_name)
    {
        return $this->doGet("/api/v2/apple_apps/$app_name.json");
    }

    public function update($app_name)
    {
        $request  = new Request('post', "/api/v2/apple_apps/$app_name.json", $this->getHeaders());
        $response = $this->call($request);

        return $response->body;
    }
}