<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_data;

class BingRelatedKeywordsLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $seed_keyword = null;

    /**
     * @var null|BingRelatedKeywordsLiveEntityMainTasksResultSeed_keyword_data;
     */
    public $seed_keyword_data = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|BingRelatedKeywordsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
