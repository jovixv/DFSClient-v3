<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteTraffic_analytics;

#[\AllowDynamicProperties]
class UserEntityMainTasksResultMoneyLimitsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteAppendix $appendix;
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
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|integer $total_dataforseo_labs;
    */
    public $total_dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteSerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyLimitsMinuteTraffic_analytics $traffic_analytics;
    */
    public $traffic_analytics = null;

    /**
    * @var null|integer $total_traffic_analytics;
    */
    public $total_traffic_analytics = null;
 
}