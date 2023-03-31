<?php

namespace app\vk_ads_api\src;

use app\vk_ads_api\src\services\ad_groups\AdGroupsService;
use app\vk_ads_api\src\services\ad_plans\AdPlansService;
use app\vk_ads_api\src\services\agency\AgencyService;
use app\vk_ads_api\src\services\apple_apps\AppleAppsService;
use app\vk_ads_api\src\services\banner_fields\BannerFieldsService;
use app\vk_ads_api\src\services\banner_patterns\BannerPatternsService;
use app\vk_ads_api\src\services\banners\BannersService;
use app\vk_ads_api\src\services\billing\BillingService;
use app\vk_ads_api\src\services\content\ContentService;
use app\vk_ads_api\src\services\goals\GoalsService;
use app\vk_ads_api\src\services\google_apps\GoogleAppsService;
use app\vk_ads_api\src\services\inapp_event_categories\InappEventCategoriesService;
use app\vk_ads_api\src\services\lead_ads\LeadAdsService;
use app\vk_ads_api\src\services\manager\ManagerService;
use app\vk_ads_api\src\services\mobile_app_users\MobileAppUsersService;
use app\vk_ads_api\src\services\mobile_categories\MobileCategoriesService;
use app\vk_ads_api\src\services\mobile_operators\MobileOperatorsService;
use app\vk_ads_api\src\services\mobile_os\MobileOperationSystemService;
use app\vk_ads_api\src\services\mobile_types\MobileTypesService;
use app\vk_ads_api\src\services\mobile_vendors\MobileVendorsService;
use app\vk_ads_api\src\services\packages\PackagesService;
use app\vk_ads_api\src\services\packages_pads\PackagesPadsService;
use app\vk_ads_api\src\services\pads_trees\PadsTreesService;
use app\vk_ads_api\src\services\projection\ProjectionService;
use app\vk_ads_api\src\services\regions\RegionsService;
use app\vk_ads_api\src\services\remarketing\RemarketingService;
use app\vk_ads_api\src\services\sharing_keys\SharingKeysService;
use app\vk_ads_api\src\services\statistics\StatisticsService;
use app\vk_ads_api\src\services\subscription\SubscriptionService;
use app\vk_ads_api\src\services\targetings_tree\TargetingsTreeService;
use app\vk_ads_api\src\services\urls\UrlsService;
use app\vk_ads_api\src\services\user\UserService;
use app\vk_ads_api\src\services\user_geo\UserGeoService;

class VkAdsApiService
{
    /**
     * @var AdPlansService
     */
    private $adPlansService;

    /**
     * @var AdGroupsService
     */
    private $adGroupsService;

    /**
     * @var BannersService
     */
    private $bannersService;

    /**
     * @var ContentService
     */
    private $contentService;

    /**
     * @var PackagesPadsService
     */
    private $packagesPadsService;

    /**
     * @var PackagesService
     */
    private $packagesService;

    /**
     * @var PadsTreesService
     */
    private $padsTreesService;

    /**
     * @var ProjectionService
     */
    private $projectionService;

    /**
     * @var TargetingsTreeService
     */
    private $targetingsTreeService;

    /**
     * @var UrlsService
     */
    private $urlsService;

    /**
     * @var BannerFieldsService
     */
    private $bannerFieldsService;

    /**
     * @var BannerPatternsService
     */
    private $bannerPatternsService;

    /**
     * @var MobileAppUsersService
     */
    private $mobileAppUsersService;

    /**
     * @var AppleAppsService
     */
    private $appleAppsService;

    /**
     * @var LeadAdsService
     */
    private $leadAdsService;

    /**
     * @var RemarketingService
     */
    private $remarketingService;

    /**
     * @var AgencyService
     */
    private $agencyService;

    /**
     * @var UserService
     */
    private $userService;

    /**
     * @var ManagerService
     */
    private $managerService;

    /**
     * @var GoogleAppsService
     */
    private $googleAppsService;

    /**
     * @var InappEventCategoriesService
     */
    private $inappEventCategoriesService;

    /**
     * @var MobileCategoriesService
     */
    private $mobileCategoriesService;

    /**
     * @var MobileOperationSystemService
     */
    private $mobileOperationSystemService;

    /**
     * @var MobileOperatorsService
     */
    private $mobileOperatorsService;

    /**
     * @var MobileTypesService
     */
    private $mobileTypesService;

    /**
     * @var MobileVendorsService
     */
    private $mobileVendorsService;

    /**
     * @var RegionsService
     */
    private $regionsService;

    /**
     * @var UserGeoService
     */
    private $userGeoService;

    /**
     * @var GoalsService
     */
    private $goalsService;

    /**
     * @var SharingKeysService
     */
    private $sharingKeysService;

    /**
     * @var BillingService
     */
    private $billingService;

    /**
     * @var SubscriptionService
     */
    private $subscriptionService;

    /**
     * @var StatisticsService
     */
    private $statisticsService;













    public function __construct(
        private string $token
    ) {
    }

    public function getAdPlansService(): AdPlansService
    {
        if (!$this->adPlansService) {
            $this->adPlansService = new AdPlansService($this->token);
        }
        return $this->adPlansService;
    }

    public function getAdGroupsService(): AdGroupsService
    {
        if (!$this->adGroupsService) {
            $this->adGroupsService = new AdGroupsService($this->token);
        }
        return $this->adGroupsService;
    }

    public function getBannersService(): BannersService
    {
        if (!$this->bannersService) {
            $this->bannersService = new BannersService($this->token);
        }
        return $this->bannersService;
    }

    public function getContentService(): ContentService
    {
        if (!$this->contentService) {
            $this->contentService = new ContentService($this->token);
        }
        return $this->contentService;
    }

    public function getPackagesPadsService(): PackagesPadsService
    {
        if (!$this->packagesPadsService) {
            $this->packagesPadsService = new PackagesPadsService($this->token);
        }
        return $this->packagesPadsService;
    }

    public function getPackagesService(): PackagesService
    {
        if (!$this->packagesService) {
            $this->packagesService = new PackagesService($this->token);
        }
        return $this->packagesService;
    }

    public function getPadsTreesService(): PadsTreesService
    {
        if (!$this->padsTreesService) {
            $this->padsTreesService = new PadsTreesService($this->token);
        }
        return $this->padsTreesService;
    }

    public function getProjectionService(): ProjectionService
    {
        if (!$this->projectionService) {
            $this->projectionService = new ProjectionService($this->token);
        }
        return $this->projectionService;
    }

    public function getTargetingsTreeService(): TargetingsTreeService
    {
        if (!$this->targetingsTreeService) {
            $this->targetingsTreeService = new TargetingsTreeService($this->token);
        }
        return $this->targetingsTreeService;
    }

    public function getUrlsService(): UrlsService
    {
        if (!$this->urlsService) {
            $this->urlsService = new UrlsService($this->token);
        }
        return $this->urlsService;
    }

    public function getBannerFieldsService(): BannerFieldsService
    {
        if (!$this->bannerFieldsService) {
            $this->bannerFieldsService = new BannerFieldsService($this->token);
        }
        return $this->bannerFieldsService;
    }

    public function getBannerPatternsService(): BannerPatternsService
    {
        if (!$this->bannerPatternsService) {
            $this->bannerPatternsService = new BannerPatternsService($this->token);
        }
        return $this->bannerPatternsService;
    }

    public function getMobileAppUsersService(): MobileAppUsersService
    {
        if (!$this->mobileAppUsersService) {
            $this->mobileAppUsersService = new MobileAppUsersService($this->token);
        }
        return $this->mobileAppUsersService;
    }

    public function getAppleAppsService(): AppleAppsService
    {
        if (!$this->appleAppsService) {
            $this->appleAppsService = new AppleAppsService($this->token);
        }
        return $this->appleAppsService;
    }

    public function getLeadAdsService(): LeadAdsService
    {
        if (!$this->leadAdsService) {
            $this->leadAdsService = new LeadAdsService($this->token);
        }
        return $this->leadAdsService;
    }

    public function getRemarketingService(): RemarketingService
    {
        if (!$this->remarketingService) {
            $this->remarketingService = new RemarketingService($this->token);
        }
        return $this->remarketingService;
    }

    public function getAgencyService(): AgencyService
    {
        if (!$this->agencyService) {
            $this->agencyService = new AgencyService($this->token);
        }
        return $this->agencyService;
    }

    public function getUserService(): UserService
    {
        if (!$this->userService) {
            $this->userService = new UserService($this->token);
        }
        return $this->userService;
    }

    public function getManagerService(): ManagerService
    {
        if (!$this->managerService) {
            $this->managerService = new ManagerService($this->token);
        }
        return $this->managerService;
    }

    public function getGoogleAppsService(): GoogleAppsService
    {
        if (!$this->googleAppsService) {
            $this->googleAppsService = new GoogleAppsService($this->token);
        }
        return $this->googleAppsService;
    }

    public function getInappEventCategoriesService(): InappEventCategoriesService
    {
        if (!$this->inappEventCategoriesService) {
            $this->inappEventCategoriesService = new InappEventCategoriesService($this->token);
        }
        return $this->inappEventCategoriesService;
    }

    public function getMobileCategoriesService(): MobileCategoriesService
    {
        if (!$this->mobileCategoriesService) {
            $this->mobileCategoriesService = new MobileCategoriesService($this->token);
        }
        return $this->mobileCategoriesService;
    }

    public function getMobileOperationSystemService(): MobileOperationSystemService
    {
        if (!$this->mobileOperationSystemService) {
            $this->mobileOperationSystemService = new MobileOperationSystemService($this->token);
        }
        return $this->mobileOperationSystemService;
    }

    public function getMobileOperatorsService(): MobileOperatorsService
    {
        if (!$this->mobileOperatorsService) {
            $this->mobileOperatorsService = new MobileOperatorsService($this->token);
        }
        return $this->mobileOperatorsService;
    }

    public function getMobileTypesService(): MobileTypesService
    {
        if (!$this->mobileTypesService) {
            $this->mobileTypesService = new MobileTypesService($this->token);
        }
        return $this->mobileTypesService;
    }

    public function getMobileVendorsService(): MobileVendorsService
    {
        if (!$this->mobileVendorsService) {
            $this->mobileVendorsService = new MobileVendorsService($this->token);
        }
        return $this->mobileVendorsService;
    }

    public function getRegionsService(): RegionsService
    {
        if (!$this->regionsService) {
            $this->regionsService = new RegionsService($this->token);
        }
        return $this->regionsService;
    }

    public function getUserGeoService(): UserGeoService
    {
        if (!$this->userGeoService) {
            $this->userGeoService = new UserGeoService($this->token);
        }
        return $this->userGeoService;
    }

    public function getGoalsService(): GoalsService
    {
        if (!$this->goalsService) {
            $this->goalsService = new GoalsService($this->token);
        }
        return $this->goalsService;
    }

    public function getSharingKeysService(): SharingKeysService
    {
        if (!$this->sharingKeysService) {
            $this->sharingKeysService = new SharingKeysService($this->token);
        }
        return $this->sharingKeysService;
    }

    public function getBillingService(): BillingService
    {
        if (!$this->billingService) {
            $this->billingService = new BillingService($this->token);
        }
        return $this->billingService;
    }

    public function getSubscriptionService(): SubscriptionService
    {
        if (!$this->subscriptionService) {
            $this->subscriptionService = new SubscriptionService($this->token);
        }
        return $this->subscriptionService;
    }

    public function getStatisticsService(): StatisticsService
    {
        if (!$this->statisticsService) {
            $this->statisticsService = new StatisticsService($this->token);
        }
        return $this->statisticsService;
    }
}