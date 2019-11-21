<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayMapCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayMapCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayMapKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayMapKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayMapSerp;

class UserEntityMainTasksResultRatesLimitsDayMap 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayMapCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayMapCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayMapKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayMapKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsDayMapSerp serp;
    */
    public $serp = null;        
     
}