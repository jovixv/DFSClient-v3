<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AiKeywordDataKeywordsSearchVolumeLiveEntityMainTasksResultItemsAi_monthly_searches;

#[\AllowDynamicProperties]
class AiKeywordDataKeywordsSearchVolumeLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $ai_search_volume;
    */
    public $ai_search_volume = null;

    /**
    * @var array|AiKeywordDataKeywordsSearchVolumeLiveEntityMainTasksResultItemsAi_monthly_searches[] $ai_monthly_searches;
    */
    public $ai_monthly_searches = [];
 
}