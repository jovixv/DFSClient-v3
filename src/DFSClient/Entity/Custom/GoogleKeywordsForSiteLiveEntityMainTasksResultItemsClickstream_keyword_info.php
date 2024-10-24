<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches;

class GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_info
{
    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var null|string;
     */
    public $last_updated_time = null;

    /**
     * @var null|GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
     */
    public $gender_distribution = null;

    /**
     * @var null|GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
     */
    public $age_distribution = null;

    /**
     * @var array|GoogleKeywordsForSiteLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches[];
     */
    public $monthly_searches = [];
}
