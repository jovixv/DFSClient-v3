<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AmazonRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data;
use DFSClientV3\Entity\Custom\AmazonRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element;

class AmazonRankedKeywordsLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|AmazonRankedKeywordsLiveEntityMainTasksResultItemsKeyword_data;
     */
    public $keyword_data = null;

    /**
     * @var null|AmazonRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_element;
     */
    public $ranked_serp_element = null;
}
