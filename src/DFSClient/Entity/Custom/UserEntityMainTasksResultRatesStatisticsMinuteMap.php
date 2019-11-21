<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteMapCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteMapCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteMapKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteMapKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteMapSerp;

class UserEntityMainTasksResultRatesStatisticsMinuteMap 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteMapCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteMapCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteMapKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteMapKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteMapSerp serp;
    */
    public $serp = null;        
     
}