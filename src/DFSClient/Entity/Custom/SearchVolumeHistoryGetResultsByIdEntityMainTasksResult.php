<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearches;

class SearchVolumeHistoryGetResultsByIdEntityMainTasksResult
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
     * @var null|SearchVolumeHistoryGetResultsByIdEntityMainTasksResultSearches;
     */
    public $searches = null;
}
