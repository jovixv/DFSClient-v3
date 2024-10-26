<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultLanguages;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultTop_domains;

class ContentAnalysisSummaryLiveEntityMainTasksResult
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
     * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultTop_domains[];
     */
    public $top_domains = [];

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultText_categories[];
     */
    public $text_categories = [];

    /**
     * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultPage_categories[];
     */
    public $page_categories = [];

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultPage_types;
     */
    public $page_types = null;

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultCountries;
     */
    public $countries = null;

    /**
     * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultLanguages;
     */
    public $languages = null;
}
