<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeTop_domains;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeLanguages;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegative 
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
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeTop_domains[] $top_domains;
    */
    public $top_domains = [];

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeText_categories[] $text_categories;
    */
    public $text_categories = [];

    /**
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_categories[] $page_categories;
    */
    public $page_categories = [];

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativePage_types $page_types;
    */
    public $page_types = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeCountries $countries;
    */
    public $countries = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNegativeLanguages $languages;
    */
    public $languages = null;
 
}