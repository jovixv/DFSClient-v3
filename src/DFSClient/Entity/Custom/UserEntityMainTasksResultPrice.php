<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCommon;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceCompetitor;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_data;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceKeywords_finder;
use DFSClient\Entity\Custom\UserEntityMainTasksResultPriceSerp;

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