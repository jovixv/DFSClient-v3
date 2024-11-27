<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentHeader;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentFooter;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentSecondary_topic;

#[\AllowDynamicProperties]
class OnPageContentParsingEntityMainTasksResultItemsPage_content 
{    
    /**
    * @var null|OnPageContentParsingEntityMainTasksResultItemsPage_contentHeader $header;
    */
    public $header = null;

    /**
    * @var null|OnPageContentParsingEntityMainTasksResultItemsPage_contentFooter $footer;
    */
    public $footer = null;

    /**
    * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic[] $main_topic;
    */
    public $main_topic = [];

    /**
    * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentSecondary_topic[] $secondary_topic;
    */
    public $secondary_topic = [];
 
}