<?php

namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Keywords;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficForKeywordsGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_keywords_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}
