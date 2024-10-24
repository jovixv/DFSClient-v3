<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarouselRectangle;

class AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarousel
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
     * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarouselItems[];
     */
    public $items = [];

    /**
     * @var null|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarouselRectangle;
     */
    public $rectangle = null;
}
