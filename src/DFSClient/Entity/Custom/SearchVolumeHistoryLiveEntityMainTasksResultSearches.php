<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesDesktop;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesNon_smartphones;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesMobile;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesTablet;

#[\AllowDynamicProperties]
class SearchVolumeHistoryLiveEntityMainTasksResultSearches 
{    
    /**
    * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesDesktop[] $desktop;
    */
    public $desktop = [];

    /**
    * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesNon_smartphones[] $non_smartphones;
    */
    public $non_smartphones = [];

    /**
    * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesMobile[] $mobile;
    */
    public $mobile = [];

    /**
    * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesTablet[] $tablet;
    */
    public $tablet = [];
 
}