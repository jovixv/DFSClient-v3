<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

#[\AllowDynamicProperties]
class GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info 
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
    * @var null|double $competition;
    */
    public $competition = null;

    /**
    * @var null|string $competition_level;
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
    * @var null|double $low_top_of_page_bid;
    */
    public $low_top_of_page_bid = null;

    /**
    * @var null|double $high_top_of_page_bid;
    */
    public $high_top_of_page_bid = null;

    /**
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * @var array|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];

	/**
	 * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoSearch_volume_trend $search_volume_trend;
	 */
	public $search_volume_trend = null;
 
}
