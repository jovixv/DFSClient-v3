<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentCommentsRating;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentCommentsPrimary_content;

#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentComments 
{    
    /**
    * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentCommentsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $publish_date;
    */
    public $publish_date = null;

    /**
    * @var null|string $author;
    */
    public $author = null;

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentCommentsPrimary_content[] $primary_content;
    */
    public $primary_content = [];
 
}