<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvanced;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegular;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtml;

class UserEntityMainTasksResultPriceSerpLive 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveAdvanced advanced;
    */
    public $advanced = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveRegular regular;
    */
    public $regular = null;        
    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveHtml html;
    */
    public $html = null;        
     
}