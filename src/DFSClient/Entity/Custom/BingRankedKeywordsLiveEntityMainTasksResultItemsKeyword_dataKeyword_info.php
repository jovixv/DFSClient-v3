<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info 
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
    * @var null|double $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var array|BingRankedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}