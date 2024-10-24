<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultLanguages;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultTop_domains;

class ContentAnalysisPhraseTrendsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $date = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $rank = null;

    /**
     * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultTop_domains[];
     */
    public $top_domains = [];

    /**
     * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultText_categories[];
     */
    public $text_categories = [];

    /**
     * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_categories[];
     */
    public $page_categories = [];

    /**
     * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_types;
     */
    public $page_types = null;

    /**
     * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultCountries;
     */
    public $countries = null;

    /**
     * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultLanguages;
     */
    public $languages = null;
}
