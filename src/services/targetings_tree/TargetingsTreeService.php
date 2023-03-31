<?php

namespace app\vk_ads_api\src\services\targetings_tree;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\models\TargetingsTree;
use app\vk_ads_api\src\services\targetings_tree\criterias\TargetingsTreeSelectionCriteria;
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