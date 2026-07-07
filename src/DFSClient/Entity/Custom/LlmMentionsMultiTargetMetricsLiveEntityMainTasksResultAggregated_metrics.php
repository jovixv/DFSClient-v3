<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsTotal;

#[\AllowDynamicProperties]
class LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metrics 
{    
    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultAggregated_metricsTotal $total;
    */
    public $total = null;
 
}