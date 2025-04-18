<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

#[\AllowDynamicProperties]
class DomainIntersectionLiveEntityMainTasksResultItemsKeyword_data
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
    * @var null|DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataImpressions_info $impressions_info;
    */
    public $impressions_info = null;

    /**
    * @var null|DomainIntersectionLiveEntityMainTasksResultItemsKeyword_dataSerp_info $serp_info;
    */
    public $serp_info = null;
 
}
