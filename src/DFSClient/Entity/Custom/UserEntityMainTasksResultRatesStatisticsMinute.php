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
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteAppendix;
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
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteSerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsMinuteTraffic_analytics;
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
