<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metrics 
{    
    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultAggregated_metricsTotal $total;
    */
    public $total = null;
 
}