<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterPrimary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterSecondary_content;
use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterTable_content;

#[\AllowDynamicProperties]
class OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooter 
{    
    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterPrimary_content[] $primary_content;
    */
    public $primary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterSecondary_content[] $secondary_content;
    */
    public $secondary_content = [];

    /**
    * @var array|OnPageContentParsingLiveEntityMainTasksResultItemsPage_contentFooterTable_content[] $table_content;
    */
    public $table_content = [];
 
}