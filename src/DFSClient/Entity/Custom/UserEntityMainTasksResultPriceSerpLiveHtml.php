<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtmlPriority_low;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtmlPriority_normal;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtmlPriority_high;

class UserEntityMainTasksResultPriceSerpLiveHtml 
{    
    /**
    * array|UserEntityMainTasksResultPriceSerpLiveHtmlPriority_low[] $priority_low;
    */
    public $priority_low = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLiveHtmlPriority_normal[] $priority_normal;
    */
    public $priority_normal = [];

    /**
    * array|UserEntityMainTasksResultPriceSerpLiveHtmlPriority_high[] $priority_high;
    */
    public $priority_high = [];
 
}