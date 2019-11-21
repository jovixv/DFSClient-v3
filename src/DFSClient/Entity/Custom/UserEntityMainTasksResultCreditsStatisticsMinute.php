<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteMap;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsMinuteSerp;

class UserEntityMainTasksResultCreditsStatisticsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteMap map;
    */
    public $map = null;        
    
    /**
    * @var null|integer total_map;
    */
    public $total_map = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsMinuteSerp serp;
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