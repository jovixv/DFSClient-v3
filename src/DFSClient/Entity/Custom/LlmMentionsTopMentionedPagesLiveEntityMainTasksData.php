<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksDataTarget;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedPagesLiveEntityMainTasksData 
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
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksDataTarget[] $target;
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
    * @var null|string $links_scope;
    */
    public $links_scope = null;

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