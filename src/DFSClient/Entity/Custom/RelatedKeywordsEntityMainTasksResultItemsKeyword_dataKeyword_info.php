<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

class RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_info
{
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
     * @var null|array;
     */
    public $categories = null;

    /**
     * array|RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[] $monthly_searches;.
     */
    public $monthly_searches = [];
}
