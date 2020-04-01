<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches;

class KeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_info 
{    
    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

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
    * array|KeywordsForCategoriesLiveEntityMainTasksResultItemsKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}