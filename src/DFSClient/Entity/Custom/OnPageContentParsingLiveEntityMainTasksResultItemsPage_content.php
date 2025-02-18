<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeader;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooter;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentMain_topic;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topic;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentRatings;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentOffers;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentComments;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentContacts;

#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResultItemsPage_content 
{    
    /**
    * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeader $header;
    */
    public $header = null;

    /**
    * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooter $footer;
    */
    public $footer = null;

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentMain_topic[] $main_topic;
    */
    public $main_topic = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentSecondary_topic[] $secondary_topic;
    */
    public $secondary_topic = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentRatings[] $ratings;
    */
    public $ratings = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentOffers[] $offers;
    */
    public $offers = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentComments[] $comments;
    */
    public $comments = [];

    /**
    * @var null|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentContacts $contacts;
    */
    public $contacts = null;
 
}