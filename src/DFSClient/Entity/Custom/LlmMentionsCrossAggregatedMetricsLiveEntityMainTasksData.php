<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksDataTargets;

#[\AllowDynamicProperties]
class LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksData 
{    
    /**
    * @var null|string $api;
    */
    public $api = null;

    /**
    * @var null|string $function;
    */
    public $function = null;

    /**
    * @var array|LlmMentionsCrossAggregatedMetricsLiveEntityMainTasksDataTargets[] $targets;
    */
    public $targets = [];

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $tag;
    */
    public $tag = null;

    /**
    * @var null|array $initial_dataset_filters;
    */
    public $initial_dataset_filters = null;

    /**
    * @var null|integer $internal_list_limit;
    */
    public $internal_list_limit = null;

    /**
    * @var null|string $platform;
    */
    public $platform = null;
 
}