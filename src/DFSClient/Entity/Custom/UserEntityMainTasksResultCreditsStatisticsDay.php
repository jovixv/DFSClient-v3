<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayMap;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDaySerp;

class UserEntityMainTasksResultCreditsStatisticsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|integer total;
    */
    public $total = null;        
    
    /**
    * @var null|integer total_common;
    */
    public $total_common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayMap map;
    */
    public $map = null;        
    
    /**
    * @var null|integer total_map;
    */
    public $total_map = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDaySerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
    
    /**
    * @var null|string value;
    */
    public $value = null;        
     
}