<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordsForAppLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\GoogleKeywordsForAppLiveEntityMainTasksResultItemsRanked_serp_element;

#[\AllowDynamicProperties]
class GoogleKeywordsForAppLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|GoogleKeywordsForAppLiveEntityMainTasksResultItemsKeyword_data $keyword_data;
    */
    public $keyword_data = null;

    /**
    * @var null|GoogleKeywordsForAppLiveEntityMainTasksResultItemsRanked_serp_element $ranked_serp_element;
    */
    public $ranked_serp_element = null;
 
}