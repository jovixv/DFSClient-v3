<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsHistoricalLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsHistoricalLiveEntityMainTasksData 
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
    * @var array|LlmMentionsHistoricalLiveEntityMainTasksDataTarget[] $target;
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
 
}