<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultLanguages;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultTop_domains;

class ContentAnalysisCategoryTrendsLiveEntityMainTasksResult
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
     * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultTop_domains[];
     */
    public $top_domains = [];

    /**
     * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultText_categories[];
     */
    public $text_categories = [];

    /**
     * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_categories[];
     */
    public $page_categories = [];

    /**
     * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_types;
     */
    public $page_types = null;

    /**
     * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultCountries;
     */
    public $countries = null;

    /**
     * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultLanguages;
     */
    public $languages = null;
}
