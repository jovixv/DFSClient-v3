<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AiKeywordDataPopularQuestionsLiveEntityMainTasksResultItemsAi_monthly_searches;

#[\AllowDynamicProperties]
class AiKeywordDataPopularQuestionsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $question;
    */
    public $question = null;

    /**
    * @var null|integer $ai_search_volume;
    */
    public $ai_search_volume = null;

    /**
    * @var array|AiKeywordDataPopularQuestionsLiveEntityMainTasksResultItemsAi_monthly_searches[] $ai_monthly_searches;
    */
    public $ai_monthly_searches = [];
 
}