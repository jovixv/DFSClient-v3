<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsSearch_results_domain;

#[\AllowDynamicProperties]
class LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $key;
    */
    public $key = null;

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];
 
}