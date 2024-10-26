<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveLanguages;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositivePage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositivePage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveTop_domains;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositive
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
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveTop_domains[];
     */
    public $top_domains = [];

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveText_categories[];
     */
    public $text_categories = [];

    /**
     * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositivePage_categories[];
     */
    public $page_categories = [];

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositivePage_types;
     */
    public $page_types = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveCountries;
     */
    public $countries = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionPositiveLanguages;
     */
    public $languages = null;
}
