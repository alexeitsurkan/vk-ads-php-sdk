<?php

namespace app\vk_ads_api\src\services\remarketing\services\segments;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\segments\criterias\SegmentSelectionCriteria;
use app\vk_ads_api\src\services\remarketing\services\segments\models\SegmentAddItem;
use app\vk_ads_api\src\services\remarketing\services\segments\models\SegmentGetItem;
use app\vk_ads_api\src\services\remarketing\services\segments\models\SegmentUpdateItem;
use app\vk_ads_api\src\services\remarketing\services\segments\services\relations\SegmentRelationsService;

class SegmentsService extends BaseService
{
    /**
     * @var SegmentRelationsService
     */
    private $segmentRelationsService;

    public function getSegmentRelationsService(): SegmentRelationsService
    {
        if (!$this->segmentRelationsService) {
            $this->segmentRelationsService = new SegmentRelationsService($this->token);
        }
        return $this->segmentRelationsService;
    }

    public function get(SegmentSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/remarketing/segments.json', SegmentGetItem::class, $selectionCriteria);
    }

    public function create(SegmentAddItem $model): array
    {
        return $this->doPost('/api/v2/remarketing/segments.json', $model);
    }

    public function update($id, SegmentUpdateItem $model): array
    {
        return $this->doPost("/api/v2/remarketing/segments/$id.json", $model);
    }

    public function delete($id): bool
    {
        return $this->doDelete("/api/v2/remarketing/segments/$id.json");
    }
}