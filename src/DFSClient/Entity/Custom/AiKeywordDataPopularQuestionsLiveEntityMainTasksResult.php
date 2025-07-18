<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class AiKeywordDataPopularQuestionsLiveEntityMainTasksResult 
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
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $offset;
    */
    public $offset = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|AiKeywordDataPopularQuestionsLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}