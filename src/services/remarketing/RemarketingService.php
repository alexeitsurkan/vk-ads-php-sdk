<?php

namespace VkAdsPhpSdk\services\remarketing;

use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\remarketing\services\counters\CountersService;
use VkAdsPhpSdk\services\remarketing\services\inapp_events\InAppEventsService;
use VkAdsPhpSdk\services\remarketing\services\local_geo\LocalGeosService;
use VkAdsPhpSdk\services\remarketing\services\segments\SegmentsService;
use VkAdsPhpSdk\services\remarketing\services\users_lists\UsersListService;

class RemarketingService extends BaseService
{
    //todo a.curkan сделать https://ads.vk.com/doc/api/resource/OfferBatchTaskDetail

    /**
     * @var CountersService
     */
    private $countersService;

    /**
     * @var LocalGeosService
     */
    private $localGeosService;

    /**
     * @var InAppEventsService
     */
    private $inAppEventsService;

    /**
     * @var UsersListService
     */
    private $usersListService;

    /**
     * @var SegmentsService
     */
    private $segmentsService;

    public function getCountersService(): CountersService
    {
        if (!$this->countersService) {
            $this->countersService = new CountersService($this->token);
        }
        return $this->countersService;
    }

    public function getLocalGeosService(): LocalGeosService
    {
        if (!$this->localGeosService) {
            $this->localGeosService = new LocalGeosService($this->token);
        }
        return $this->localGeosService;
    }

    public function getInAppEventsService(): InAppEventsService
    {
        if (!$this->inAppEventsService) {
            $this->inAppEventsService = new InAppEventsService($this->token);
        }
        return $this->inAppEventsService;
    }

    public function getUsersListService(): UsersListService
    {
        if (!$this->usersListService) {
            $this->usersListService = new UsersListService($this->token);
        }
        return $this->usersListService;
    }

    public function getSegmentsService(): SegmentsService
    {
        if (!$this->segmentsService) {
            $this->segmentsService = new SegmentsService($this->token);
        }
        return $this->segmentsService;
    }
}