<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesLimitsDayTraffic_analytics;

class UserEntityMainTasksResultRatesLimitsDay
{
    /**
     * @var null|UserEntityMainTasksResultRatesLimitsDayAppendix;
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
     * @var null|UserEntityMainTasksResultRatesLimitsDayDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsDayKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsDaySerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultRatesLimitsDayTraffic_analytics;
     */
    public $traffic_analytics = null;

    /**
     * @var null|integer;
     */
    public $total_traffic_analytics = null;
}
