<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteSerp;

class UserEntityMainTasksResultMoneyLimitsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteSerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}