<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsVideoRectangle;

class SettingSerpLiveAdvancedEntityMainTasksResultItemsVideo
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
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsVideoItems[];
     */
    public $items = [];

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsVideoRectangle;
     */
    public $rectangle = null;
}
