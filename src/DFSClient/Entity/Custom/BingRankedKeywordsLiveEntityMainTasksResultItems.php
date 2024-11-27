<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data $keyword_data;
    */
    public $keyword_data = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element $ranked_serp_element;
    */
    public $ranked_serp_element = null;
 
}