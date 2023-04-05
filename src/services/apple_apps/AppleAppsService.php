<?php

namespace VkAdsPhpSdk\services\apple_apps;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\SkAdNetworkIdsAddItem;
use GuzzleHttp\Psr7\Request;

class AppleAppsService extends BaseService
{
    public function skAdNetworkIdentityShare($id, SkAdNetworkIdsAddItem $model)
    {
        $options = [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::BODY => $this->getBody($model)
        ];
        $this->call('post', "/api/v2/apple_apps/$id/sk_ad_network_ids/share.json",$options);

        return true;
    }

    public function skAdNetworkIdentityWithdraw($id, SkAdNetworkIdsAddItem $model)
    {
        $options =  [
            RequestOptions::HEADERS => $this->getHeaders(),
            RequestOptions::BODY => $this->getBody($model)
        ];
        $this->call('post', "/api/v2/apple_apps/$id/sk_ad_network_ids/withdraw.json",$options);

        return true;
    }

    public function get($app_name)
    {
        return $this->doGet("/api/v2/apple_apps/$app_name.json");
    }

    public function update($app_name)
    {
        $options = [
            RequestOptions::HEADERS => $this->getHeaders()
        ];
        $response = $this->call('post', "/api/v2/apple_apps/$app_name.json",$options);

        return $response->body;
    }
}