<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches;

class ClickstreamSearchVolumeLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|boolean $use_clickstream;
    */
    public $use_clickstream = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|integer $search_volume_last;
    */
    public $search_volume_last = null;

    /**
    * @var array|ClickstreamSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}