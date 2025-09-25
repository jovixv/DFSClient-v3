<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RegularSerpGetResultsByIdEntityMainTasksResultItems;

#[\AllowDynamicProperties]
class RegularSerpGetResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * @var null|NULL $spell;
    */
    public $spell = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $se_results_count;
    */
    public $se_results_count = null;

		/**
		 * @var null|integer $pages_count;
		 */
		public $pages_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * @var array|RegularSerpGetResultsByIdEntityMainTasksResultItems[] $items;
    */
    public $items = [];
 
}
