<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForSiteLiveEntityMainTasksResultMonthly_searches;

class KeywordsForSiteLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|NULL $location_code;
    */
    public $location_code = null;

    /**
    * @var null|NULL $language_code;
    */
    public $language_code = null;

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
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * array|KeywordsForSiteLiveEntityMainTasksResultMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}