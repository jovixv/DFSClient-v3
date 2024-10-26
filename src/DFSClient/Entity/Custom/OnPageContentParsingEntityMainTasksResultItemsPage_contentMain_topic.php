<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicPrimary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicSecondary_content;

class OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic
{
    /**
     * @var null|string;
     */
    public $h_title = null;

    /**
     * @var null|string;
     */
    public $main_title = null;

    /**
     * @var null|null;
     */
    public $author = null;

    /**
     * @var null|string;
     */
    public $language = null;

    /**
     * @var null|integer;
     */
    public $level = null;

    /**
     * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicPrimary_content[];
     */
    public $primary_content = [];

    /**
     * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicSecondary_content[];
     */
    public $secondary_content = [];
}
