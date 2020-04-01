<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayAppendix;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayDataforseo_labs;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayKeywords_data;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDaySerp;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayTraffic_analytics;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultRatesStatisticsDayReviews;

class UserEntityMainTasksResultRatesStatisticsDay 
{    
    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayAppendix $appendix;
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
    * @var null|UserEntityMainTasksResultRatesStatisticsDayDataforseo_labs $dataforseo_labs;
    */
    public $dataforseo_labs = null;

    /**
    * @var null|integer $total_dataforseo_labs;
    */
    public $total_dataforseo_labs = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayKeywords_data $keywords_data;
    */
    public $keywords_data = null;

    /**
    * @var null|integer $total_keywords_data;
    */
    public $total_keywords_data = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDaySerp $serp;
    */
    public $serp = null;

    /**
    * @var null|integer $total_serp;
    */
    public $total_serp = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayTraffic_analytics $traffic_analytics;
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

    /**
    * @var null|integer $total_reviews;
    */
    public $total_reviews = null;

    /**
    * @var null|UserEntityMainTasksResultRatesStatisticsDayReviews $reviews;
    */
    public $reviews = null;
 
}