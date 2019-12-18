<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataAd_traffic_by_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataAd_traffic_by_platforms;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_category;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_site;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_dataSearch_volume;

class UserEntityMainTasksResultRatesStatisticsDayKeywords_data 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataAd_traffic_by_keywords $ad_traffic_by_keywords;
    */
    public $ad_traffic_by_keywords = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataAd_traffic_by_platforms $ad_traffic_by_platforms;
    */
    public $ad_traffic_by_platforms = null;

    /**
    * @var null|integer $endpoints;
    */
    public $endpoints = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataGoogle $google;
    */
    public $google = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_category $keywords_for_category;
    */
    public $keywords_for_category = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_keywords $keywords_for_keywords;
    */
    public $keywords_for_keywords = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataKeywords_for_site $keywords_for_site;
    */
    public $keywords_for_site = null;

    /**
    * @var null|integer $languages;
    */
    public $languages = null;

    /**
    * @var null|integer $locations;
    */
    public $locations = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_dataSearch_volume $search_volume;
    */
    public $search_volume = null;
 
}