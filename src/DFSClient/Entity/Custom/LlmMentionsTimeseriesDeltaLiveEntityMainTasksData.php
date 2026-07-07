<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTimeseriesDeltaLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsTimeseriesDeltaLiveEntityMainTasksData 
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
    * @var array|LlmMentionsTimeseriesDeltaLiveEntityMainTasksDataTarget[] $target;
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
    * @var null|string $date_from;
    */
    public $date_from = null;

    /**
    * @var null|string $date_to;
    */
    public $date_to = null;

    /**
    * @var null|string $group_range;
    */
    public $group_range = null;
 
}