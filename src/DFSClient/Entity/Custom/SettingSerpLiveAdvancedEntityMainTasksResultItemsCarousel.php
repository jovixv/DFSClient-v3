<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsCarouselRectangle;

class SettingSerpLiveAdvancedEntityMainTasksResultItemsCarousel
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
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsCarouselItems[];
     */
    public $items = [];

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsCarouselRectangle;
     */
    public $rectangle = null;
}
