<?php

namespace VkAdsPhpSdk\services\lead_ads;

use GuzzleHttp\RequestOptions;
use VkAdsPhpSdk\components\BaseService;
use VkAdsPhpSdk\services\lead_ads\criterias\LeadAdsSelectionCriteria;
use VkAdsPhpSdk\models\LeadsListElement;
use VkAdsPhpSdk\services\lead_ads\services\lead_forms\LeadFormsService;

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
//        $response = $this->call('post', $uri,[
//RequestOptions::HEADERS => $headers
//]);
    }
}