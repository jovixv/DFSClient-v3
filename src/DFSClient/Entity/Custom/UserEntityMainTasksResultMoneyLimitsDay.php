<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayTraffic_analytics;

class UserEntityMainTasksResultMoneyLimitsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayAppendix $appendix;
    */
    public $appendix = null;

    /**
    * @var null|integer $total;
    */
    public $total = null;

    /**
    * @var null|integer $total_appendix;
    */
    public $total_appendix = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDaySerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsDayTraffic_analytics $traffic_analytics;
    */
    public $traffic_analytics = null;

    /**
    * @var null|integer $total_traffic_analytics;
    */
    public $total_traffic_analytics = null;
 
}