<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsAppRectangle;

class SettingSerpLiveAdvancedEntityMainTasksResultItemsApp
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $rank_group = null;

    /**
     * @var null|integer;
     */
    public $rank_absolute = null;

    /**
     * @var null|string;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $xpath = null;

    /**
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsAppItems[];
     */
    public $items = [];

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsAppRectangle;
     */
    public $rectangle = null;
}
