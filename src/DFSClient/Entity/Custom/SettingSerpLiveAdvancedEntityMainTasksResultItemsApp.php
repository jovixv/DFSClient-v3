<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsAppRectangle;

#[\AllowDynamicProperties]
class SettingSerpLiveAdvancedEntityMainTasksResultItemsApp 
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
    * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsAppItems[] $items;
    */
    public $items = [];

    /**
    * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsAppRectangle $rectangle;
    */
    public $rectangle = null;
 
}