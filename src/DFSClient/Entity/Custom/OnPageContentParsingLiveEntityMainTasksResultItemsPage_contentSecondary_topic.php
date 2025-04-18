<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicPrimary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicSecondary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicTable_content;

#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topic 
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
    * @var null|string $author;
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
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicPrimary_content[] $primary_content;
    */
    public $primary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicSecondary_content[] $secondary_content;
    */
    public $secondary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topicTable_content[] $table_content;
    */
    public $table_content = [];
 
}