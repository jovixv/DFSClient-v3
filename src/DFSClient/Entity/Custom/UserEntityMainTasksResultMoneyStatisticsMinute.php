<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerp;

class UserEntityMainTasksResultMoneyStatisticsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerp serp;
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