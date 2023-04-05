<?php

namespace VkAdsPhpSdk\services\remarketing\services\segments;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\segments\criterias\SegmentSelectionCriteria;
use VkAdsPhpSdkmodels\SegmentAddItem;
use VkAdsPhpSdkmodels\SegmentGetItem;
use VkAdsPhpSdkmodels\SegmentUpdateItem;
use VkAdsPhpSdk\services\remarketing\services\segments\services\relations\SegmentRelationsService;

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