<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeGetResultsByIdEntityMainTasksResultMonthly_searches;

class SearchVolumeGetResultsByIdEntityMainTasksResult
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
     * @var null|double;
     */
    public $competition = null;

    /**
     * @var null|integer;
     */
    public $cpc = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var null|array;
     */
    public $categories = null;

    /**
     * array|SearchVolumeGetResultsByIdEntityMainTasksResultMonthly_searches[] $monthly_searches;.
     */
    public $monthly_searches = [];
}
