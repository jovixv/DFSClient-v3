<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultTop_domains;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultText_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_categories;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_types;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\ContentAnalysisCategoryTrendsLiveEntityMainTasksResultLanguages;

#[\AllowDynamicProperties]
class ContentAnalysisCategoryTrendsLiveEntityMainTasksResult 
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
    * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultTop_domains[] $top_domains;
    */
    public $top_domains = [];

    /**
    * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultText_categories[] $text_categories;
    */
    public $text_categories = [];

    /**
    * @var array|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_categories[] $page_categories;
    */
    public $page_categories = [];

    /**
    * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultPage_types $page_types;
    */
    public $page_types = null;

    /**
    * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultCountries $countries;
    */
    public $countries = null;

    /**
    * @var null|ContentAnalysisCategoryTrendsLiveEntityMainTasksResultLanguages $languages;
    */
    public $languages = null;
 
}