<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteSerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsMinuteTraffic_analytics;

class UserEntityMainTasksResultMoneyLimitsMinute
{
    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteAppendix;
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
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteSerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsMinuteTraffic_analytics;
     */
    public $traffic_analytics = null;

    /**
     * @var null|integer;
     */
    public $total_traffic_analytics = null;
}
