<?php


namespace DFSClient\Models\KeywordsDataApi\Ads_Traffic_For_Keywords;


use DFSClient\Models\AbstractModel;

class AdsTrafficForKeywordsGetResultsById extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_keywords_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}