<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicPrimary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicSecondary_content;

class OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topic 
{    
    /**
    * @var null|string $h_title;
    */
    public $h_title = null;

    /**
    * @var null|string $main_title;
    */
    public $main_title = null;

    /**
    * @var null|NULL $author;
    */
    public $author = null;

    /**
    * @var null|string $language;
    */
    public $language = null;

    /**
    * @var null|integer $level;
    */
    public $level = null;

    /**
    * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicPrimary_content[] $primary_content;
    */
    public $primary_content = [];

    /**
    * @var array|OnPageContentParsingEntityMainTasksResultItemsPage_contentMain_topicSecondary_content[] $secondary_content;
    */
    public $secondary_content = [];
 
}