<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultAudienceTop_categories;

class SimilarwebGetResultsByIdEntityMainTasksResultAudience 
{    
    /**
    * @var null|integer $visits;
    */
    public $visits = null;

    /**
    * @var null|string $time_on_site_avg;
    */
    public $time_on_site_avg = null;

    /**
    * @var null|double $page_views_avg;
    */
    public $page_views_avg = null;

    /**
    * @var null|double $bounce_rate;
    */
    public $bounce_rate = null;

    /**
    * @var array|SimilarwebGetResultsByIdEntityMainTasksResultAudienceTop_categories[] $top_categories;
    */
    public $top_categories = [];

    /**
    * @var null|array $other_visited_websites;
    */
    public $other_visited_websites = null;

    /**
    * @var null|array $top_topics;
    */
    public $top_topics = null;
 
}