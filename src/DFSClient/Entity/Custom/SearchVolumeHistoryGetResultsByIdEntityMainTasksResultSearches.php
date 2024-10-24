<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesDesktop;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesMobile;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesNon_smartphones;
use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesTablet;

class SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearches
{
    /**
     * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesDesktop[];
     */
    public $desktop = [];

    /**
     * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesNon_smartphones[];
     */
    public $non_smartphones = [];

    /**
     * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesMobile[];
     */
    public $mobile = [];

    /**
     * @var array|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearchesTablet[];
     */
    public $tablet = [];
}
