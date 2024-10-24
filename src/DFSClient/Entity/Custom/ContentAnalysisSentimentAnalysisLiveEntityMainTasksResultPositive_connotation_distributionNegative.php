<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeLanguages;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeTop_domains;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegative
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
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeTop_domains[];
     */
    public $top_domains = [];

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeText_categories[];
     */
    public $text_categories = [];

    /**
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_categories[];
     */
    public $page_categories = [];

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_types;
     */
    public $page_types = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeCountries;
     */
    public $countries = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeLanguages;
     */
    public $languages = null;
}
