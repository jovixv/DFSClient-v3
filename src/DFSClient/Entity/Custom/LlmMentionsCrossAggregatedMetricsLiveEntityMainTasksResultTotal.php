<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalLocation;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalSearch_results_domain;

#[\AllowDynamicProperties]
class LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotal 
{    
    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultTotalSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];
 
}