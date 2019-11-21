<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceMapSerp;

class UserEntityMainTasksResultPriceMap 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceMapSerp serp;
    */
    public $serp = null;        
     
}