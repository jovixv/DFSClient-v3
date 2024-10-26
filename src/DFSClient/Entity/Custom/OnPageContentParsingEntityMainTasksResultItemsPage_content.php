<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentFooter;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentHeader;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentSecondary_topic;

class OnPageContentParsingEntityMainTasksResultItemsPage_content
{
    /**
     * @var null|OnPageContentParsingEntityMainTasksResultItemsPage_contentHeader;
     */
    public $header = null;

    /**
     * @var null|OnPageContentParsingEntityMainTasksResultItemsPage_contentFooter;
     */
    public $footer = null;

    /**
     * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic[];
     */
    public $main_topic = [];

    /**
     * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentSecondary_topic[];
     */
    public $secondary_topic = [];
}
