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
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteAppendix;
     */
    public $appendix = null;

    /**
     * @var null|integer;
     */
    public $total = null;

    /**
     * @var null|integer;
     */
    public $total_appendix = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteSerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsMinuteTraffic_analytics;
     */
    public $traffic_analytics = null;

    /**
     * @var null|integer;
     */
    public $total_traffic_analytics = null;

    /**
     * @var null|string;
     */
    public $value = null;
}
