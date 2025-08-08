<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class LlmScraperChatGptLiveHtmlEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|LlmScraperChatGptLiveHtmlEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}