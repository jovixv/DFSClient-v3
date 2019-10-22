<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveAd_traffic_by_keywords;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveAd_traffic_by_platforms;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_category;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_keywords;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_site;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_dataLiveSearch_volume;

class UserEntityMainTasksResultPriceKeywords_dataLive 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveAd_traffic_by_keywords ad_traffic_by_keywords;
    */
    public $ad_traffic_by_keywords = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveAd_traffic_by_platforms ad_traffic_by_platforms;
    */
    public $ad_traffic_by_platforms = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_category keywords_for_category;
    */
    public $keywords_for_category = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_keywords keywords_for_keywords;
    */
    public $keywords_for_keywords = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveKeywords_for_site keywords_for_site;
    */
    public $keywords_for_site = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_dataLiveSearch_volume search_volume;
    */
    public $search_volume = null;        
     
}