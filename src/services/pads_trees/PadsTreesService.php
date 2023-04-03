<?php

namespace VkAdsPhpSdk\services\pads_trees;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\pads_trees\models\PadsTree;
use GuzzleHttp\Psr7\Request;

class PadsTreesService extends BaseService
{
    public function get(): array
    {
        $request                 = new Request('get', '/api/v2/pads_trees.json', $this->getHeaders());
        $response                = $this->call($request);
        $response->body['items'] = $this->mapArray($response->body['items'], PadsTree::class);

        return $response->body;
    }
}