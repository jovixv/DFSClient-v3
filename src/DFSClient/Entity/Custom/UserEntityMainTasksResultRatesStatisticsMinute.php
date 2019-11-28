<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteSerp;

class UserEntityMainTasksResultRatesStatisticsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteCommon common;
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
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteSerp serp;
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