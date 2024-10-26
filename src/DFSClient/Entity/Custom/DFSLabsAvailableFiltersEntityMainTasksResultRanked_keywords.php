<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsAmazon;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsBing;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsGoogle;

class DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywords
{
    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsGoogle;
     */
    public $google = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsBing;
     */
    public $bing = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywordsAmazon;
     */
    public $amazon = null;
}
