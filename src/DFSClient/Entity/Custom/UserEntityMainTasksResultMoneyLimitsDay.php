<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyLimitsDayTraffic_analytics;

class UserEntityMainTasksResultMoneyLimitsDay
{
    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsDayAppendix;
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
     * @var null|UserEntityMainTasksResultMoneyLimitsDayDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsDayKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsDaySerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyLimitsDayTraffic_analytics;
     */
    public $traffic_analytics = null;

    /**
     * @var null|integer;
     */
    public $total_traffic_analytics = null;
}
