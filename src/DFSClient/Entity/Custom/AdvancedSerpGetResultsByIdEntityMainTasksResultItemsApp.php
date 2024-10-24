<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAppRectangle;

class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsApp
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
     * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAppItems[];
     */
    public $items = [];

    /**
     * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAppRectangle;
     */
    public $rectangle = null;
}
