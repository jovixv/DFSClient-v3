<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMentioned_in;

class SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $price = null;

    /**
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsRating;
     */
    public $rating = null;

    /**
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMentioned_in[];
     */
    public $mentioned_in = [];
}
