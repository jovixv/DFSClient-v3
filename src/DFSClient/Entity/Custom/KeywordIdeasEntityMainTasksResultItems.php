<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordIdeasEntityMainTasksResultItemsKeyword_info;
use DFSClientV3\Entity\Custom\KeywordIdeasEntityMainTasksResultItemsImpressions_info;

class KeywordIdeasEntityMainTasksResultItems 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|KeywordIdeasEntityMainTasksResultItemsKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|KeywordIdeasEntityMainTasksResultItemsImpressions_info $impressions_info;
    */
    public $impressions_info = null;
 
}