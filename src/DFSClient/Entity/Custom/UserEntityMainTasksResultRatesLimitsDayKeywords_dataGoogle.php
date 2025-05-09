<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleAd_traffic_by_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleAd_traffic_by_platforms;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_category;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_site;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleSearch_volume;

#[\AllowDynamicProperties]
class UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogle 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleAd_traffic_by_keywords $ad_traffic_by_keywords;
    */
    public $ad_traffic_by_keywords = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleAd_traffic_by_platforms $ad_traffic_by_platforms;
    */
    public $ad_traffic_by_platforms = null;

    /**
    * @var null|integer $adwords_status;
    */
    public $adwords_status = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_category $keywords_for_category;
    */
    public $keywords_for_category = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_keywords $keywords_for_keywords;
    */
    public $keywords_for_keywords = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleKeywords_for_site $keywords_for_site;
    */
    public $keywords_for_site = null;

    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_dataGoogleSearch_volume $search_volume;
    */
    public $search_volume = null;
 
}