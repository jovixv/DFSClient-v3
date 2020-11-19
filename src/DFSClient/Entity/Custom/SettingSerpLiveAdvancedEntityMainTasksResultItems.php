<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsExtra;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsLinks;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsRectangle;

class SettingSerpLiveAdvancedEntityMainTasksResultItems 
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
    * @var null|array $highlighted;
    */
    public $highlighted = null;

    /**
    * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsExtra $extra;
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
    * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsLinks[] $links;
    */
    public $links = [];

    /**
    * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsRectangle $rectangle;
    */
    public $rectangle = null;
 
}