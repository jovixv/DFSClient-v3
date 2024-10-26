<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_boxRectangle;

class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_box
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
     * @var null|array;
     */
    public $text = null;

    /**
     * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_boxLinks[];
     */
    public $links = [];

    /**
     * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_boxRectangle;
     */
    public $rectangle = null;
}
