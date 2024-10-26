<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMainTasksResultSearches;

class SearchVolumeHistoryLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|array;
     */
    public $device = null;

    /**
     * @var null|string;
     */
    public $period = null;

    /**
     * @var null|SearchVolumeHistoryLiveEntityMainTasksResultSearches;
     */
    public $searches = null;
}
