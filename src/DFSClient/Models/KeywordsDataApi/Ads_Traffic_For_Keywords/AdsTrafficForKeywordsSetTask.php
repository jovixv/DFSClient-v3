<?php


namespace DFSClient\Models\KeywordsDataApi\Ads_Traffic_For_Keywords;


use DFSClient\Models\AbstractModel;

class AdsTrafficForKeywordsSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_keywords_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}