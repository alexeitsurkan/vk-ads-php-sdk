<?php

namespace app\vk_ads_api\src\services\remarketing\services\inapp_events;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\inapp_events\criterias\InAppEventSelectionCriteria;
use app\vk_ads_api\src\services\remarketing\services\inapp_events\services\trackers\TrackersService;

class InAppEventsService extends BaseService
{
    /**
     * @var TrackersService
     */
    private $trackersService;

    public function getTrackersService(): TrackersService
    {
        if (!$this->trackersService) {
            $this->trackersService = new TrackersService($this->token);
        }
        return $this->trackersService;
    }

    public function get(InAppEventSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v2/remarketing/inapp_events.json', selectionCriteria: $selectionCriteria);
    }
}