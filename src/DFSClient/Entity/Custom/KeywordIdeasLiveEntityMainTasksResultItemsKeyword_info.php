<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordIdeasLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches;

class KeywordIdeasLiveEntityMainTasksResultItemsKeyword_info
{
    /**
     * @var null|string;
     */
    public $last_updated_time = null;

    /**
     * @var null|integer;
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
     * @var null|array;
     */
    public $categories = null;

    /**
     * array|KeywordIdeasLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches[] $monthly_searches;.
     */
    public $monthly_searches = [];
}
