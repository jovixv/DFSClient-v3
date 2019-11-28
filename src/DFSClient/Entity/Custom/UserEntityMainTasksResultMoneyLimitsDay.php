<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDaySerp;

class UserEntityMainTasksResultMoneyLimitsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayCommon common;
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
    * @var null|UserEntityMainTasksResultMoneyLimitsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDaySerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}