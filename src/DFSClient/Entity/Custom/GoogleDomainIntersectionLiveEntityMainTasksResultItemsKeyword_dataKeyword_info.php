<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleDomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

#[\AllowDynamicProperties]
class GoogleDomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_info 
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
    * @var null|NULL $competition;
    */
    public $competition = null;

    /**
    * @var null|string $competition_level;
    */
    public $competition_level = null;

    /**
    * @var null|NULL $cpc;
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
    * @var array|GoogleDomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];

	/**
	 * @var null|GoogleDomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoSearch_volume_trend $search_volume_trend;
	 */
	public $search_volume_trend = null;
 
}
