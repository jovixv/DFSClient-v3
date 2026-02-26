<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultItemsSources;

#[\AllowDynamicProperties]
class LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

    /**
    * @var null|string $markdown;
    */
    public $markdown = null;

    /**
    * @var null|string $original_text;
    */
    public $original_text = null;

    /**
    * @var array|LlmScraperGeminiGetAdvancedResultsByIdEntityMainTasksResultItemsSources[] $sources;
    */
    public $sources = [];
 
}