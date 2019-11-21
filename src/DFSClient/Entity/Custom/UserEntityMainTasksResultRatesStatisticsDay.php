<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMap;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerp;

class UserEntityMainTasksResultRatesStatisticsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayCommon common;
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
    * @var null|UserEntityMainTasksResultRatesStatisticsDayCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|integer total_competitor;
    */
    public $total_competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|integer total_keywords_data;
    */
    public $total_keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|integer total_keywords_finder;
    */
    public $total_keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMap map;
    */
    public $map = null;        
    
    /**
    * @var null|integer total_map;
    */
    public $total_map = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDaySerp serp;
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