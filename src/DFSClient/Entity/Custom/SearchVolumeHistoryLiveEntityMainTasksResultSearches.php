<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesDesktop;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesMobile;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesNon_smartphones;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearchesTablet;

class SearchVolumeHistoryLiveEntityMainTasksResultSearches
{
    /**
     * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesDesktop[];
     */
    public $desktop = [];

    /**
     * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesNon_smartphones[];
     */
    public $non_smartphones = [];

    /**
     * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesMobile[];
     */
    public $mobile = [];

    /**
     * @var array|SearchVolumeHistoryLiveEntityMainTasksResultSearchesTablet[];
     */
    public $tablet = [];
}
