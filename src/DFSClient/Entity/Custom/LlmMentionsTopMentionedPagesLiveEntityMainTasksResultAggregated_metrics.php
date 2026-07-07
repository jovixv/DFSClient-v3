<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metrics 
{    
    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultAggregated_metricsTotal $total;
    */
    public $total = null;
 
}