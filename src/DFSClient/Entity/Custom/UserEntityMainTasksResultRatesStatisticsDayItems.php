<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayItemsCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayItemsCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayItemsKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayItemsKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayItemsSerp;

class UserEntityMainTasksResultRatesStatisticsDayItems 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayItemsCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayItemsCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayItemsKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayItemsKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayItemsSerp serp;
    */
    public $serp = null;        
     
}
