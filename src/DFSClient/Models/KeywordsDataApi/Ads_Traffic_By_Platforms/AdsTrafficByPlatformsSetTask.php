<?php


namespace DFSClient\Models\KeywordsDataApi\Ads_Traffic_By_Platforms;


use DFSClient\Models\AbstractModel;

class AdsTrafficByPlatformsSetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_ad_traffic_by_platforms_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}