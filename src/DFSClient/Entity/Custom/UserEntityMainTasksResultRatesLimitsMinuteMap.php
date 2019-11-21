<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteMapCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteMapCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteMapKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteMapKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteMapSerp;

class UserEntityMainTasksResultRatesLimitsMinuteMap 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteMapCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteMapCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteMapKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteMapKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesLimitsMinuteMapSerp serp;
    */
    public $serp = null;        
     
}