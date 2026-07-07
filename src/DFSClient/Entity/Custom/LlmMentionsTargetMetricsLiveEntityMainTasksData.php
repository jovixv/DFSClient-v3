<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTargetMetricsLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsTargetMetricsLiveEntityMainTasksData 
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
    * @var array|LlmMentionsTargetMetricsLiveEntityMainTasksDataTarget[] $target;
    */
    public $target = [];

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
 
}