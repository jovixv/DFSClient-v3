<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveHtml;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveRegular;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerpLiveAdvanced;

class UserEntityMainTasksResultPriceSerpLive 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveHtml $html;
    */
    public $html = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveRegular $regular;
    */
    public $regular = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerpLiveAdvanced $advanced;
    */
    public $advanced = null;
 
}