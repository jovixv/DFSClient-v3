<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteMap;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsMinuteSerp;

class UserEntityMainTasksResultCreditsLimitsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteMap map;
    */
    public $map = null;        
    
    /**
    * @var null|integer total_map;
    */
    public $total_map = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsMinuteSerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}