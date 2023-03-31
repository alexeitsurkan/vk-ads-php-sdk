<?php

namespace app\vk_ads_api\src\services\remarketing\services\inapp_events\services\trackers;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\inapp_events\services\trackers\services\events\EventsService;

class TrackersService extends BaseService
{
    /**
     * @var EventsService
     */
    private $eventsService;

    public function getEventsService(): EventsService
    {
        if (!$this->eventsService) {
            $this->eventsService = new EventsService($this->token);
        }
        return $this->eventsService;
    }
}