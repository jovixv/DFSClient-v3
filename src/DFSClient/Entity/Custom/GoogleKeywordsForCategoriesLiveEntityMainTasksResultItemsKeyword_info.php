<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches;

class GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info
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
     * @var null|integer;
     */
    public $competition = null;

    /**
     * @var null|string;
     */
    public $competition_level = null;

    /**
     * @var null|double;
     */
    public $cpc = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var null|double;
     */
    public $low_top_of_page_bid = null;

    /**
     * @var null|integer;
     */
    public $high_top_of_page_bid = null;

    /**
     * @var null|array;
     */
    public $categories = null;

    /**
     * @var array|GoogleKeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches[];
     */
    public $monthly_searches = [];
}
