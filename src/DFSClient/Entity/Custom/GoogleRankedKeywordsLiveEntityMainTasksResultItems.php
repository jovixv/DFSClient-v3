<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element;

#[\AllowDynamicProperties]
class GoogleRankedKeywordsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data $keyword_data;
    */
    public $keyword_data = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element $ranked_serp_element;
    */
    public $ranked_serp_element = null;
 
}