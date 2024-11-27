<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\AmazonRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element;

#[\AllowDynamicProperties]
class AmazonRankedKeywordsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|AmazonRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data $keyword_data;
    */
    public $keyword_data = null;

    /**
    * @var null|AmazonRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element $ranked_serp_element;
    */
    public $ranked_serp_element = null;
 
}