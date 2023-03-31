<?php

namespace app\vk_ads_api\src;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\enum\GrandTypeEnum;
use app\vk_ads_api\src\enum\ScopeAgencyClientEnum;
use app\vk_ads_api\src\enum\ScopeClientEnum;
use app\vk_ads_api\src\enum\ScopeManagerClientEnum;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;

class VkAdsOAuth extends BaseService
{
    private array  $headers = [
        'Content-Type' => 'application/x-www-form-urlencoded'
    ];

    /**
     * @param $client_id
     * @param $state
     * @param ScopeAgencyClientEnum[]|ScopeClientEnum[]|ScopeManagerClientEnum[] $scope
     * @param $redirect_uri
     * @return string
     */
    public function getAuthorizeUrl($client_id, $state, $scope, $redirect_uri): string
    {
        $uri = Uri::withQueryValues(new Uri(self::BASE_URI . 'hq/settings/access'), [
            'action'        => 'oauth2',
            'response_type' => 'code',
            'state'         => $state,
            'client_id'     => $client_id,
            'redirect_uri'  => $redirect_uri,
            'scope'         => $scope
        ]);
        return $uri->__toString();
    }

    public function getClientCredentials(
        string $client_id,
        string $client_secret,
        bool $permanent = false
    ): array {
        $body     = $this->getBody(
            [
                'grant_type'    => GrandTypeEnum::CLIENT_CREDENTIALS,
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'permanent'     => $permanent
            ]
        );
        $request  = new Request('POST', '/api/v2/oauth2/token.json', $this->headers, $body);
        $response = $this->call($request);

        return $response->body;
    }

    public function getAgencyClientCredentials(
        string $client_id,
        string $client_secret,
        string $agency_client_id,
        bool $permanent = false
    ): array {
        $body     = $this->getBody(
            [
                'grant_type'       => GrandTypeEnum::AGENCY_CLIENT_CREDENTIALS,
                'client_id'        => $client_id,
                'client_secret'    => $client_secret,
                'agency_client_id' => $agency_client_id,
                'permanent'        => $permanent
            ]
        );
        $request  = new Request('POST', '/api/v2/oauth2/token.json', $this->headers, $body);
        $response = $this->call($request);

        return $response->body;
    }

    public function getAgencyClientCredentialsByAgencyToken(
        string $client_id,
        string $client_secret,
        string $agency_client_id,
        string $agency_access_token,
        bool $permanent = false
    ): array {
        $body     = $this->getBody(
            [
                'grant_type'       => GrandTypeEnum::AGENCY_CLIENT_CREDENTIALS,
                'client_id'        => $client_id,
                'client_secret'    => $client_secret,
                'agency_client_id' => $agency_client_id,
                'access_token' => $agency_access_token,
                'permanent'        => $permanent
            ]
        );
        $request  = new Request('POST', '/api/v2/oauth2/token.json', $this->headers, $body);
        $response = $this->call($request);

        return $response->body;
    }

    public function refreshToken(
        string $refresh_token,
        string $client_id,
        string $client_secret,
        bool $permanent = false
    ): array {
        $body     = $this->getBody(
            [
                'grant_type'    => GrandTypeEnum::REFRESH_TOKEN,
                'refresh_token' => $refresh_token,
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'permanent'     => $permanent
            ]
        );
        $request  = new Request('POST', '/api/v2/oauth2/token.json', $this->headers, $body);
        $response = $this->call($request);

        return $response->body;
    }

    public function deleteToken(string $client_id, string $client_secret, string $user_id = null)
    {
        $body     = $this->getBody(
            [
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'user_id'       => $user_id,
            ]
        );
        $request  = new Request('POST', '/api/v2/oauth2/token/delete.json', $this->headers, $body);
        $response = $this->call($request);
        return $response->body;
    }

}