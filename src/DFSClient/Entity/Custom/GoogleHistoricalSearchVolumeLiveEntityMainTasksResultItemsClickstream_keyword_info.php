<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
use DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches;

class GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_info
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
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoGender_distribution;
     */
    public $gender_distribution = null;

    /**
     * @var null|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoAge_distribution;
     */
    public $age_distribution = null;

    /**
     * @var array|GoogleHistoricalSearchVolumeLiveEntityMainTasksResultItemsClickstream_keyword_infoMonthly_searches[];
     */
    public $monthly_searches = [];
}
