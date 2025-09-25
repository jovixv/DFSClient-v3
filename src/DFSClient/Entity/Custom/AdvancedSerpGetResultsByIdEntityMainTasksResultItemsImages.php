<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImagesRectangle;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImagesRelated_image_searches_element;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImages 
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
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImagesItems[] $items;
    */
    public $items = [];

	/**
	 * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImagesRelated_image_searches_element[] $related_image_searches;
	 */
	public $related_image_searches = [];

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImagesRectangle $rectangle;
    */
    public $rectangle = null;
 
}
