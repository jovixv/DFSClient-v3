<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsSentiment_connotations;

class ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetrics
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $rank = null;

    /**
     * @var null|null;
     */
    public $top_domains = null;

    /**
     * @var null|ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisRatingDistributionLiveEntityMainTasksResultMetricsConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var null|null;
     */
    public $text_categories = null;

    /**
     * @var null|null;
     */
    public $page_categories = null;

    /**
     * @var null|null;
     */
    public $page_types = null;

    /**
     * @var null|null;
     */
    public $countries = null;

    /**
     * @var null|null;
     */
    public $languages = null;
}
