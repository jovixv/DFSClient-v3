<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMention_carousel_elementMentioned_in;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMention_carousel_elementRating;

class SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMention_carousel_element
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
     * @var null|SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMention_carousel_elementRating;
     */
    public $rating = null;

    /**
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carouselItemsMention_carousel_elementMentioned_in[];
     */
    public $mentioned_in = [];
}
