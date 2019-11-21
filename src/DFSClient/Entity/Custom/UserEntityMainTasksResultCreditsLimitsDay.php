<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDayMap;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsLimitsDaySerp;

class UserEntityMainTasksResultCreditsLimitsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDayCommon common;
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
    * @var null|UserEntityMainTasksResultCreditsLimitsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDayMap map;
    */
    public $map = null;        
    
    /**
    * @var null|integer total_map;
    */
    public $total_map = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsLimitsDaySerp serp;
    */
    public $serp = null;        
    
    /**
    * @var null|integer total_serp;
    */
    public $total_serp = null;        
     
}