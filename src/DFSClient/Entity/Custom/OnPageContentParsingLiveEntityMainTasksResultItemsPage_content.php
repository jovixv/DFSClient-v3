<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooter;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeader;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentMain_topic;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topic;

class OnPageContentParsingLiveEntityMainTasksResultItemsPage_content
{
    /**
     * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeader;
     */
    public $header = null;

    /**
     * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooter;
     */
    public $footer = null;

    /**
     * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentMain_topic[];
     */
    public $main_topic = [];

    /**
     * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topic[];
     */
    public $secondary_topic = [];
}
