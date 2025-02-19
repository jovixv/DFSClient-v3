<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches;

#[\AllowDynamicProperties]
class GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_info 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|integer $competition;
    */
    public $competition = null;

    /**
    * @var null|NULL $competition_level;
    */
    public $competition_level = null;

    /**
    * @var null|double $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|NULL $low_top_of_page_bid;
    */
    public $low_top_of_page_bid = null;

    /**
    * @var null|NULL $high_top_of_page_bid;
    */
    public $high_top_of_page_bid = null;

    /**
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * @var array|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];

	/**
	 * @var null|GoogleKeywordIdeasLiveEntityMainTasksResultItemsKeyword_infoSearch_volume_trend $search_volume_trend;
	 */
	public $search_volume_trend = null;
 
}
