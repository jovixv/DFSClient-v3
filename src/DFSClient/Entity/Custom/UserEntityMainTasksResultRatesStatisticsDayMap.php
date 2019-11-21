<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMapCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMapCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMapKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMapKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayMapSerp;

class UserEntityMainTasksResultRatesStatisticsDayMap 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMapCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMapCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMapKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMapKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayMapSerp serp;
    */
    public $serp = null;        
     
}