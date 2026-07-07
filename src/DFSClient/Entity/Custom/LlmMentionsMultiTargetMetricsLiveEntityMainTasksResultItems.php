<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsTotal;

#[\AllowDynamicProperties]
class LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $key;
    */
    public $key = null;

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsMultiTargetMetricsLiveEntityMainTasksResultItemsTotal $total;
    */
    public $total = null;
 
}