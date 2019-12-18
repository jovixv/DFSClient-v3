<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerp;

class UserEntityMainTasksResultPrice 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceAppendix $appendix;
    */
    public $appendix = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerp $serp;
    */
    public $serp = null;
 
}