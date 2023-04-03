<?php

namespace VkAdsPhpSdk\services\remarketing\services\inapp_events\services\trackers\services\events;

use VkAdsPhpSdk\components\BaseService;

class EventsService extends BaseService
{
    public function update($rb_mobile_app_id,$tracker_id,$inapp_event_id):bool
    {
        $this->doPost("/api/v2/remarketing/inapp_events/$rb_mobile_app_id/trackers/$tracker_id/events/$inapp_event_id.json");
        return true;
    }
}