<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerp;

class UserEntityMainTasksResultMoneyStatisticsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayCommon common;
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
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerp serp;
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