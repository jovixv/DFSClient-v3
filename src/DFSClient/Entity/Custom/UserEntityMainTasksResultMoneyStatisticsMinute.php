<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsMinuteTraffic_analytics;

class UserEntityMainTasksResultMoneyStatisticsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteAppendix $appendix;
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
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|integer $total_dataforseo_labs;
    */
    public $total_dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteTraffic_analytics $traffic_analytics;
    */
    public $traffic_analytics = null;

    /**
    * @var null|integer $total_traffic_analytics;
    */
    public $total_traffic_analytics = null;

    /**
    * @var null|string $value;
    */
    public $value = null;
 
}