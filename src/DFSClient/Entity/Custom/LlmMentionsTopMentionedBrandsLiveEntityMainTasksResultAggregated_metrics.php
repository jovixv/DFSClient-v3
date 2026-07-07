<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metrics 
{    
    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultAggregated_metricsTotal $total;
    */
    public $total = null;
 
}