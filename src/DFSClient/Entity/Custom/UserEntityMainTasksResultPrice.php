<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCommon;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceCompetitor;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_finder;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerp;

class UserEntityMainTasksResultPrice 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceCommon common;
    */
    public $common = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceCompetitor competitor;
    */
    public $competitor = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_data keywords_data;
    */
    public $keywords_data = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_finder keywords_finder;
    */
    public $keywords_finder = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerp serp;
    */
    public $serp = null;        
     
}
