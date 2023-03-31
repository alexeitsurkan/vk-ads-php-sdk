<?php

namespace app\vk_ads_api\src\services\remarketing;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\remarketing\services\counters\CountersService;
use app\vk_ads_api\src\services\remarketing\services\inapp_events\InAppEventsService;
use app\vk_ads_api\src\services\remarketing\services\local_geo\LocalGeosService;
use app\vk_ads_api\src\services\remarketing\services\segments\SegmentsService;
use app\vk_ads_api\src\services\remarketing\services\users_lists\UsersListService;

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