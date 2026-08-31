<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResultSearch_results;
use DFSClientV3\Entity\Custom\LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResultSources;

#[\AllowDynamicProperties]
class LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResult 
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
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|string $markdown;
    */
    public $markdown = null;

    /**
    * @var array|LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResultSearch_results[] $search_results;
    */
    public $search_results = [];

    /**
    * @var array|LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResultSources[] $sources;
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
    * @var array|LlmScraperPerplexityGetAdvancedResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}