<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaidRectangle;

#[\AllowDynamicProperties]
class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaid 
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
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $breadcrumb;
    */
    public $breadcrumb = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

	/**
	 * @var null|bool $is_image
	 * @deprecated Will be removed from SERP API and deleted in 1.3.0 (2027-01-20). Use checks array instead.
	 */
	public $is_image = null;

	/**
	 * @var null|bool $is_video
	 * @deprecated Will be removed from SERP API and deleted in 1.3.0 (2027-01-20). Use checks array instead.
	 */
	public $is_video = null;

	/**
	 * @var null|array $checks
	 */
	public $checks = null;

    /**
    * @var null|array $highlighted;
    */
    public $highlighted = null;

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaidExtra $extra;
    */
    public $extra = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|array $description_rows;
    */
    public $description_rows = null;

    /**
    * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaidLinks[] $links;
    */
    public $links = [];

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaidPrice $price;
    */
    public $price = null;

    /**
    * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaidRectangle $rectangle;
    */
    public $rectangle = null;
 
}
