<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches;

#[\AllowDynamicProperties]
class ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var array|ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}