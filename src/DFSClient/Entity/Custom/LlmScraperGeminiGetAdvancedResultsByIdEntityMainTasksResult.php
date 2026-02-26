<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultSources;

#[\AllowDynamicProperties]
class LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResult 
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
    * @var null|string $model;
    */
    public $model = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|string $markdown;
    */
    public $markdown = null;

    /**
    * @var array|LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultSources[] $sources;
    */
    public $sources = [];

    /**
    * @var null|integer $se_results_count;
    */
    public $se_results_count = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}