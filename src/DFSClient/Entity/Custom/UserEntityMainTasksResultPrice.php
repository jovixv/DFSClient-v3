<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultPriceTraffic_analytics;

class UserEntityMainTasksResultPrice 
{    
    /**
    * @var null|UserEntityMainTasksResultPriceAppendix $appendix;
    */
    public $appendix = null;

    /**
    * @var null|UserEntityMainTasksResultPriceDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultPriceKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultPriceSerp $serp;
    */
    public $serp = null;

    /**
    * @var null|UserEntityMainTasksResultPriceTraffic_analytics $traffic_analytics;
    */
    public $traffic_analytics = null;
 
}