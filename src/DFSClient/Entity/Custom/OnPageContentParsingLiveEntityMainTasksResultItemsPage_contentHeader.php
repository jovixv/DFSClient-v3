<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderPrimary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderSecondary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderTable_content;

#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeader 
{    
    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderPrimary_content[] $primary_content;
    */
    public $primary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderSecondary_content[] $secondary_content;
    */
    public $secondary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentHeaderTable_content[] $table_content;
    */
    public $table_content = [];
 
}