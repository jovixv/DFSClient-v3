<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsConnotation_types;

#[\AllowDynamicProperties]
class ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetrics 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $rank;
    */
    public $rank = null;

    /**
    * @var null|NULL $top_domains;
    */
    public $top_domains = null;

    /**
    * @var null|ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var null|NULL $text_categories;
    */
    public $text_categories = null;

    /**
    * @var null|NULL $page_categories;
    */
    public $page_categories = null;

    /**
    * @var null|NULL $page_types;
    */
    public $page_types = null;

    /**
    * @var null|NULL $countries;
    */
    public $countries = null;

    /**
    * @var null|NULL $languages;
    */
    public $languages = null;
 
}