<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEventsRectangle;

class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEvents
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
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEventsItems[];
     */
    public $items = [];

    /**
     * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEventsRectangle;
     */
    public $rectangle = null;
}
