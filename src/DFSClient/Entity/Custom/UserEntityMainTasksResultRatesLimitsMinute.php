<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerp;

class UserEntityMainTasksResultRatesLimitsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}