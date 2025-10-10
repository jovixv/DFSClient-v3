<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalLocation;
use DFSClientV3\Entity\Custom\LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalSearch_results_domain;

#[\AllowDynamicProperties]
class LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotal 
{    
    /**
    * @var array|LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsAggregatedMetricsLiveEntityMainTasksResultTotalSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];
 
}