<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsMinuteTraffic_analytics;

class UserEntityMainTasksResultRatesLimitsMinute
{
    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteAppendix;
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
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteSerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsMinuteTraffic_analytics;
     */
    public $traffic_analytics = null;

    /**
     * @var null|integer;
     */
    public $total_traffic_analytics = null;
}
