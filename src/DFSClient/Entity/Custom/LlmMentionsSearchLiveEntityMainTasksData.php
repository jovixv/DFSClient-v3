<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsSearchLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsSearchLiveEntityMainTasksData 
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
    * @var array|LlmMentionsSearchLiveEntityMainTasksDataTarget[] $target;
    */
    public $target = [];

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|array $filters;
    */
    public $filters = null;

    /**
    * @var null|array $order_by;
    */
    public $order_by = null;

    /**
    * @var null|string $platform;
    */
    public $platform = null;

    /**
    * @var null|integer $limit;
    */
    public $limit = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|string $tag;
    */
    public $tag = null;
 
}