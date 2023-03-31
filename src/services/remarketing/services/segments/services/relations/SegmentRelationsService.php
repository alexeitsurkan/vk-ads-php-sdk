<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments\services\relations;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\segments\services\relations\models\SegmentRelationAddItem;
use app\vk_ads_api\src\services\remarketing\services\segments\services\relations\models\SegmentRelationGetItem;
use app\vk_ads_api\src\services\remarketing\services\segments\services\relations\models\SegmentRelationUpdateItem;

class SegmentRelationsService extends BaseService
{
    public function get($segment_id):array
    {
        return $this->doGet("/api/v2/remarketing/segments/$segment_id/relations.json?fields=id,object_id,object_type,params",SegmentRelationGetItem::class);
    }

    public function create($segment_id,SegmentRelationAddItem $model):array
    {
        return $this->doPost("/api/v2/remarketing/segments/$segment_id/relations.json",$model);
    }

    public function update($segment_id, $id,SegmentRelationUpdateItem $model):array
    {
        return $this->doPost("/api/v2/remarketing/segments/$segment_id/relations/$id.json",$model);
    }
    
    public function delete($segment_id, int $id):bool
    {
        return $this->doDelete("/api/v2/remarketing/segments/$segment_id/relations/$id.json");
    }
    
    public function massDelete($segment_id, array $ids):bool
    {
        return $this->doDelete("/api/v2/remarketing/segments/$segment_id/relations/".implode(',',$ids).".json");
    }
}