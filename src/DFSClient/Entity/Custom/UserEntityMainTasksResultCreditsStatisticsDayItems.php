<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayItemsCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayItemsCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayItemsKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayItemsKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultCreditsStatisticsDayItemsSerp;

class UserEntityMainTasksResultCreditsStatisticsDayItems 
{    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayItemsCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayItemsCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayItemsKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayItemsKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultCreditsStatisticsDayItemsSerp serp;
    */
    public $serp = null;        
     
}
