<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayReviews;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayTraffic_analytics;

class UserEntityMainTasksResultRatesStatisticsDay
{
    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayAppendix;
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
     * @var null|UserEntityMainTasksResultRatesStatisticsDayDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|integer;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDaySerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayTraffic_analytics;
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

    /**
     * @var null|integer;
     */
    public $total_reviews = null;

    /**
     * @var null|UserEntityMainTasksResultRatesStatisticsDayReviews;
     */
    public $reviews = null;
}
