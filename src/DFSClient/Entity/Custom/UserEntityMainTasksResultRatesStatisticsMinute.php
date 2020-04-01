<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsMinuteTraffic_analytics;

class UserEntityMainTasksResultRatesStatisticsMinute 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteAppendix $appendix;
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
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|integer $total_dataforseo_labs;
    */
    public $total_dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteSerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsMinuteTraffic_analytics $traffic_analytics;
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