<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches;

class GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_info
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
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
     */
    public $gender_distribution = null;

    /**
     * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
     */
    public $age_distribution = null;

    /**
     * @var array|GoogleKeywordIdeasLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches[];
     */
    public $monthly_searches = [];
}
