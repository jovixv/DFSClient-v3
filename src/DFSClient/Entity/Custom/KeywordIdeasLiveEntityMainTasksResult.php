<?php

namespace DFSClientV3\Entity\Custom;


class KeywordIdeasLiveEntityMainTasksResult 
{    
    /**
    * @var null|array $seed_keywords;
    */
    public $seed_keywords = null;

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
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * array|KeywordIdeasLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}