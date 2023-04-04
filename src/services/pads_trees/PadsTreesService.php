<?php

namespace VkAdsPhpSdk\services\pads_trees;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\pads_trees\models\PadsTree;
use GuzzleHttp\Psr7\Request;

class PadsTreesService extends BaseService
{
    public function get(): array
    {
        $response                = $this->call('get', '/api/v2/pads_trees.json', [RequestOptions::HEADERS => $this->getHeaders()]);
        $response->body['items'] = $this->mapArray($response->body['items'], PadsTree::class);

        return $response->body;
    }
}