<?php

namespace app\vk_ads_api\src\services\lead_ads;

use app\vk_ads_api\src\components\BaseService;
use app\vk_ads_api\src\services\lead_ads\criterias\LeadAdsSelectionCriteria;
use app\vk_ads_api\src\services\lead_ads\models\LeadsListElement;
use app\vk_ads_api\src\services\lead_ads\services\lead_forms\LeadFormsService;

class LeadAdsService extends BaseService
{
    /**
     * @var LeadFormsService
     */
    private $leadFormsService;

    public function getLeadFormsService(): LeadFormsService
    {
        if (!$this->leadFormsService) {
            $this->leadFormsService = new LeadFormsService($this->token);
        }
        return $this->leadFormsService;
    }
    
    public function get(LeadAdsSelectionCriteria $selectionCriteria)
    {
        return $this->doGet('/api/v1/lead_ads/leads.json',LeadsListElement::class,$selectionCriteria);
    }

    public function uploadImage($role = 'logo')
    {
        //todo a.curkan сделать https://ads.vk.com/doc/api/resource/LeadFormImage
//       $uri = "/api/v1/lead_ads/upload_image/$role";
//       $headers = $this->getHeaders();
//       $headers['Content-Type'] = 'multipart/form-data';
//        $request  = new Request('post', $uri, $headers);
//        $response = $this->call($request);
    }
}