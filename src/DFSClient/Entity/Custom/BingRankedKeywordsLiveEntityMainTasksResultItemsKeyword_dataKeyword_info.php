<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

class BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $last_updated_time = null;

    /**
     * @var null|double;
     */
    public $competition = null;

    /**
     * @var null|double;
     */
    public $cpc = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var array|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[];
     */
    public $monthly_searches = [];
}
