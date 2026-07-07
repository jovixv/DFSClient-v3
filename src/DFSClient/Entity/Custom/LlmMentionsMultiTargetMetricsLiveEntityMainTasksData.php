<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsMultiTargetMetricsLiveEntityMainTasksDataTargets;

#[\AllowDynamicProperties]
class LlmMentionsMultiTargetMetricsLiveEntityMainTasksData 
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
    * @var array|LlmMentionsMultiTargetMetricsLiveEntityMainTasksDataTargets[] $targets;
    */
    public $targets = [];

    /**
    * @var null|string $platform;
    */
    public $platform = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|integer $internal_list_limit;
    */
    public $internal_list_limit = null;

    /**
    * @var null|integer $limit;
    */
    public $limit = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;
 
}