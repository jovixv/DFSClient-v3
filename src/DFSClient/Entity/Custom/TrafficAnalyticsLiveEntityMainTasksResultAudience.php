<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TrafficAnalyticsLiveEntityMainTasksResultAudienceTop_categories;

class TrafficAnalyticsLiveEntityMainTasksResultAudience
{
    /**
     * @var null|integer;
     */
    public $visits = null;

    /**
     * @var null|string;
     */
    public $time_on_site_avg = null;

    /**
     * @var null|double;
     */
    public $page_views_avg = null;

    /**
     * @var null|double;
     */
    public $bounce_rate = null;

    /**
     * @var array|TrafficAnalyticsLiveEntityMainTasksResultAudienceTop_categories[];
     */
    public $top_categories = [];

    /**
     * @var null|array;
     */
    public $other_visited_websites = null;

    /**
     * @var null|array;
     */
    public $top_topics = null;
}
