<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayReviews;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayTraffic_analytics;

class UserEntityMainTasksResultMoneyStatisticsDay
{
    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayAppendix;
     */
    public $appendix = null;

    /**
     * @var null|double;
     */
    public $total = null;

    /**
     * @var null|integer;
     */
    public $total_appendix = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labs;
     */
    public $dataforseo_labs = null;

    /**
     * @var null|double;
     */
    public $total_dataforseo_labs = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayKeywords_data;
     */
    public $keywords_data = null;

    /**
     * @var null|integer;
     */
    public $total_keywords_data = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDaySerp;
     */
    public $serp = null;

    /**
     * @var null|integer;
     */
    public $total_serp = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayTraffic_analytics;
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
     * @var null|double;
     */
    public $total_reviews = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayReviews;
     */
    public $reviews = null;
}
