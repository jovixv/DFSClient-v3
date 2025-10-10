<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsTopDomainsLiveEntityMainTasksData 
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
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksDataTarget[] $target;
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
    * @var null|string $platform;
    */
    public $platform = null;

    /**
    * @var null|string $links_scope;
    */
    public $links_scope = null;

    /**
    * @var null|integer $items_list_limit;
    */
    public $items_list_limit = null;

    /**
    * @var null|integer $internal_list_limit;
    */
    public $internal_list_limit = null;

    /**
    * @var null|array $initial_dataset_filters;
    */
    public $initial_dataset_filters = null;

    /**
    * @var null|string $tag;
    */
    public $tag = null;
 
}