<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearches;

#[\AllowDynamicProperties]
class SearchVolumeHistoryLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|array $device;
    */
    public $device = null;

    /**
    * @var null|string $period;
    */
    public $period = null;

    /**
    * @var null|SearchVolumeHistoryLiveEntityMainTasksResultSearches $searches;
    */
    public $searches = null;
 
}