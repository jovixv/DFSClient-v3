<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingAdsSearchVolumeLiveEntityMainTasksResultMonthly_searches;

class BingAdsSearchVolumeLiveEntityMainTasksResult 
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
    * @var null|string $device;
    */
    public $device = null;

    /**
    * @var null|double $competition;
    */
    public $competition = null;

    /**
    * @var null|double $cpc;
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
    * @var array|BingAdsSearchVolumeLiveEntityMainTasksResultMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}