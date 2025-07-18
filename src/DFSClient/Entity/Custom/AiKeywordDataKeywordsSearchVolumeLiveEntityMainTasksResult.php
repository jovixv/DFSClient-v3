<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class AiKeywordDataKeywordsSearchVolumeLiveEntityMainTasksResult 
{    
    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|AiKeywordDataKeywordsSearchVolumeLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}