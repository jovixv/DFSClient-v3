<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsGoogle;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsBing;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsAmazon;

#[\AllowDynamicProperties]
class DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywords 
{    
    /**
    * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsGoogle $google;
    */
    public $google = null;

    /**
    * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsBing $bing;
    */
    public $bing = null;

    /**
    * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsAmazon $amazon;
    */
    public $amazon = null;
 
}