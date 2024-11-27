<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultTop_domains;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisSummaryLiveEntityMainTasksResultLanguages;

#[\AllowDynamicProperties]
class ContentAnalysisSummaryLiveEntityMainTasksResult 
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
    * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultTop_domains[] $top_domains;
    */
    public $top_domains = [];

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultText_categories[] $text_categories;
    */
    public $text_categories = [];

    /**
    * @var array|ContentAnalysisSummaryLiveEntityMainTasksResultPage_categories[] $page_categories;
    */
    public $page_categories = [];

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultPage_types $page_types;
    */
    public $page_types = null;

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultCountries $countries;
    */
    public $countries = null;

    /**
    * @var null|ContentAnalysisSummaryLiveEntityMainTasksResultLanguages $languages;
    */
    public $languages = null;
 
}