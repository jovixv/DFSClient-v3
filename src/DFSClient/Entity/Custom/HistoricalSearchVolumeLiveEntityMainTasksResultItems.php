<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HistoricalSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches;

class HistoricalSearchVolumeLiveEntityMainTasksResultItems
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
     * @var null|boolean;
     */
    public $search_partners = null;

    /**
     * @var null|string;
     */
    public $last_updated_time = null;

    /**
     * @var null|null;
     */
    public $competition = null;

    /**
     * @var null|null;
     */
    public $cpc = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var null|null;
     */
    public $categories = null;

    /**
     * @var array|HistoricalSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches[];
     */
    public $monthly_searches = [];
}
