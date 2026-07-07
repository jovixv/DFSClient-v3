<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metrics 
{    
    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultAggregated_metricsTotal $total;
    */
    public $total = null;
 
}