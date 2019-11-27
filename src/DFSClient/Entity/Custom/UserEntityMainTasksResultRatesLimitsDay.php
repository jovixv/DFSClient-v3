<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDaySerp;

class UserEntityMainTasksResultRatesLimitsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayCommon common;
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
    * @var null|UserEntityMainTasksResultRatesLimitsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDaySerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}