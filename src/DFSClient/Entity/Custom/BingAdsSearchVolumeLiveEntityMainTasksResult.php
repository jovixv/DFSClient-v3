<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingAdsSearchVolumeLiveEntityMainTasksResultMonthly_searches;

class BingAdsSearchVolumeLiveEntityMainTasksResult
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
    public $device = null;

    /**
     * @var null|double;
     */
    public $competition = null;

    /**
     * @var null|double;
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
     * @var array|BingAdsSearchVolumeLiveEntityMainTasksResultMonthly_searches[];
     */
    public $monthly_searches = [];
}
