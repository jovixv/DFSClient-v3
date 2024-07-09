<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesDesktop;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesNon_smartphones;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesMobile;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesTablet;

class SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearches 
{    
    /**
    * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesDesktop[] $desktop;
    */
    public $desktop = [];

    /**
    * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesNon_smartphones[] $non_smartphones;
    */
    public $non_smartphones = [];

    /**
    * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesMobile[] $mobile;
    */
    public $mobile = [];

    /**
    * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesTablet[] $tablet;
    */
    public $tablet = [];
 
}