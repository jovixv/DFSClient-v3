<?php

namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Platforms;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficByPlatformsGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_platforms_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  =  false;
}
