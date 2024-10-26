<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_dataSerp_info;

class BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_data
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_dataSerp_info;
     */
    public $serp_info = null;
}
