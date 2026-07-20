<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcastsRectangle;

/**
 * @deprecated Removed from SERP API. Will be deleted in 1.3.0 (2027-01-20).
 */
#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcasts 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

		/**
		 * @var null|integer $page;
		 */
		public $page = null;

    /**
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcastsItems[] $items;
    */
    public $items = [];

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcastsRectangle $rectangle;
    */
    public $rectangle = null;
 
}
