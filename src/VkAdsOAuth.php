<?php

namespace VkAdsPhpSdk;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\enum\GrandTypeEnum;
use VkAdsPhpSdk\enum\ScopeAgencyClientEnum;
use VkAdsPhpSdk\enum\ScopeClientEnum;
use VkAdsPhpSdk\enum\ScopeManagerClientEnum;
use GuzzleHttp\Psr7\Uri;
use VkAdsPhpSdk\exceptions\VkAdsApiException;

class VkAdsOAuth extends BaseService
{
    private array $headers = [
        'Content-Type' => 'application/x-www-form-urlencoded'
    ];

    /**
     * @param $client_id
     * @param $state
     * @param string[]|ScopeAgencyClientEnum[]|ScopeClientEnum[]|ScopeManagerClientEnum[] $scope
     * @param string|null $redirect_uri
     * @return string
     */
    public static function getAuthorizeUrl($client_id, $state, $scope, $redirect_uri = null): string
    {
        $uri = Uri::withQueryValues(new Uri(self::BASE_URI . 'hq/settings/access'), [
            'action'        => 'oauth2',
            'response_type' => 'code',
            'state'         => $state,
            'client_id'     => $client_id,
            'redirect_uri'  => $redirect_uri,
            'scope'         => implode(',', $scope)
        ]);
        return $uri->__toString();
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function authorization(
        string $client_id,
        string $client_secret,
        string $user_id,
        string $code,
        bool $permanent = false
    ): array {
        try{
            $options  = [
                RequestOptions::HEADERS     => $this->headers,
                RequestOptions::FORM_PARAMS => [
                    'grant_type' => GrandTypeEnum::AUTHORIZATION_CODE,
                    'client_id'  => $client_id,
                    'code'       => $code,
                    'permanent'  => $permanent
                ]
            ];

            return $this
                ->call('POST', '/api/v2/oauth2/token.json', $options)
                ->body;
        } catch (VkAdsApiException $e) {
            if ($e->getCode() == 403) {
                $oauth->deleteToken($client_id, $client_secret, $user_id);
                return $this->authorization($client_id,$user_id,$code);
            } else {
                throw $e;
            }
        }
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function codeInfo(
        string $client_id,
        string $client_secret,
        string $code
    ): array {
        $options  = [
            RequestOptions::HEADERS     => $this->headers,
            RequestOptions::FORM_PARAMS => [
                'client_id'     => $client_id,
                'code'          => $code,
                'client_secret' => $client_secret
            ]
        ];

        return $this
            ->call('POST', '/api/v2/oauth2/code_info.json', $options)
            ->body;
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function getClientCredentials(
        string $client_id,
        string $client_secret,
        string $user_id,
        bool $permanent = false
    ): array {
        try {
            $options  = [
                RequestOptions::HEADERS     => $this->headers,
                RequestOptions::FORM_PARAMS => [
                    'grant_type'    => GrandTypeEnum::CLIENT_CREDENTIALS,
                    'client_id'     => $client_id,
                    'client_secret' => $client_secret,
                    'permanent'     => $permanent
                ]
            ];

            return $this
                ->call('POST', '/api/v2/oauth2/token.json', $options)
                ->body;
        }catch (VkAdsApiException $e){
            if($e->getCode() === 403){
                $this->deleteToken(
                    $client_id,
                    $client_secret,
                    $user_id
                );
                return $this->getClientCredentials($client_id, $client_secret, $user_id);
            }else throw $e;
        }

    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function getAgencyClientCredentials(
        string $client_id,
        string $client_secret,
        string $agency_client_id,
        bool $permanent = false
    ): array {
        try {
            $options  = [
                RequestOptions::HEADERS     => $this->headers,
                RequestOptions::FORM_PARAMS => [
                    'grant_type'       => GrandTypeEnum::AGENCY_CLIENT_CREDENTIALS,
                    'client_id'        => $client_id,
                    'client_secret'    => $client_secret,
                    'agency_client_id' => $agency_client_id,
                    'permanent'        => $permanent
                ]
            ];

            return $this
                ->call('POST', '/api/v2/oauth2/token.json', $options)
                ->body;
        }catch (VkAdsApiException $e){
            if($e->getCode() === 403){
                $this->deleteToken(
                    $client_id,
                    $client_secret,
                    $agency_client_id
                );
                return $this->getAgencyClientCredentials($client_id, $client_secret, $agency_client_id);
            }else throw $e;
        }
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function getAgencyClientCredentialsByAgencyToken(
        string $client_id,
        string $client_secret,
        string $agency_client_id,
        string $agency_access_token,
        bool $permanent = false
    ): array {
        $options  = [
            RequestOptions::HEADERS     => $this->headers,
            RequestOptions::FORM_PARAMS => [
                'grant_type'       => GrandTypeEnum::AGENCY_CLIENT_CREDENTIALS,
                'client_id'        => $client_id,
                'client_secret'    => $client_secret,
                'agency_client_id' => $agency_client_id,
                'access_token'     => $agency_access_token,
                'permanent'        => $permanent
            ]
        ];

        return $this
            ->call('POST', '/api/v2/oauth2/token.json', $options)
            ->body;
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function refreshToken(
        string $refresh_token,
        string $client_id,
        string $client_secret,
        bool $permanent = false
    ): array {
        $options = [
            RequestOptions::HEADERS     => $this->headers,
            RequestOptions::FORM_PARAMS => [
                'grant_type'    => GrandTypeEnum::REFRESH_TOKEN,
                'refresh_token' => $refresh_token,
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'permanent'     => $permanent
            ]
        ];

        return $this
            ->call('POST', '/api/v2/oauth2/token.json', $options)
            ->body;
    }

    /**
     * @throws exceptions\VkAdsApiException
     */
    public function deleteToken(string $client_id, string $client_secret, string $user_id = null): bool
    {
        $options = [
            RequestOptions::HEADERS     => $this->headers,
            RequestOptions::FORM_PARAMS => [
                'client_id'     => $client_id,
                'client_secret' => $client_secret,
                'user_id'       => $user_id,
            ]
        ];

        $this
            ->call('POST', '/api/v2/oauth2/token/delete.json', $options)
            ->body;

        return true;
    }

}