<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultTop_domains;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisPhraseTrendsLiveEntityMainTasksResultLanguages;

class ContentAnalysisPhraseTrendsLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $date;
    */
    public $date = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $rank;
    */
    public $rank = null;

    /**
    * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultTop_domains[] $top_domains;
    */
    public $top_domains = [];

    /**
    * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultText_categories[] $text_categories;
    */
    public $text_categories = [];

    /**
    * @var array|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_categories[] $page_categories;
    */
    public $page_categories = [];

    /**
    * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultPage_types $page_types;
    */
    public $page_types = null;

    /**
    * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultCountries $countries;
    */
    public $countries = null;

    /**
    * @var null|ContentAnalysisPhraseTrendsLiveEntityMainTasksResultLanguages $languages;
    */
    public $languages = null;
 
}