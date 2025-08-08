<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmScraperChatGptLiveAdvancedEntityMainTasksResultItemsSources;

#[\AllowDynamicProperties]
class LlmScraperChatGptLiveAdvancedEntityMainTasksResultItems 
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
    * @var array|LlmScraperChatGptLiveAdvancedEntityMainTasksResultItemsSources[] $sources;
    */
    public $sources = [];
 
}