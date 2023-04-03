<?php

namespace VkAdsPhpSdk\services\remarketing\services\inapp_events\services\trackers;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\inapp_events\services\trackers\services\events\EventsService;

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