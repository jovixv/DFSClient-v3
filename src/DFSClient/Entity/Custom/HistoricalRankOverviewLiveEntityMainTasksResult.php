<?php

namespace DFSClientV3\Entity\Custom;


#[\AllowDynamicProperties]
class HistoricalRankOverviewLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $target;
    */
    public $target = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|integer $total_count;
    */
    public $total_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|HistoricalRankOverviewLiveEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}