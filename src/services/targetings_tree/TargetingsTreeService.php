<?php

namespace VkAdsPhpSdk\services\targetings_tree;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\models\TargetingsTree;
use VkAdsPhpSdk\services\targetings_tree\criterias\TargetingsTreeSelectionCriteria;
use GuzzleHttp\Psr7\Request;

class TargetingsTreeService extends BaseService
{
    public function get(TargetingsTreeSelectionCriteria $selectionCriteria)
    {
        $request        = new Request('get', '/api/v2/targetings_tree.json', $this->getHeaders());
        $response       = $this->call($request);
        $response->body = $this->mapArray($response->body, TargetingsTree::class);

        return $response->body;
    }
}