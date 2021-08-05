<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HistoricalSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches;

class HistoricalSearchVolumeLiveEntityMainTasksResultItems 
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
    * @var null|boolean $search_partners;
    */
    public $search_partners = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|NULL $competition;
    */
    public $competition = null;

    /**
    * @var null|NULL $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|NULL $categories;
    */
    public $categories = null;

    /**
    * @var array|HistoricalSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}