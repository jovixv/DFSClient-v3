<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralTop_domains;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralLanguages;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutral 
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
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralTop_domains[] $top_domains;
    */
    public $top_domains = [];

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralText_categories[] $text_categories;
    */
    public $text_categories = [];

    /**
    * @var array|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralPage_categories[] $page_categories;
    */
    public $page_categories = [];

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralPage_types $page_types;
    */
    public $page_types = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralCountries $countries;
    */
    public $countries = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distributionNeutralLanguages $languages;
    */
    public $languages = null;
 
}