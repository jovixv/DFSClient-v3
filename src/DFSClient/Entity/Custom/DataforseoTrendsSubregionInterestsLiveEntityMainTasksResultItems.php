<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests;
use DFSClientV3\Entity\Custom\DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests_comparison;

class DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|integer $position;
    */
    public $position = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|array $keywords;
    */
    public $keywords = null;

    /**
    * @var array|DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests[] $interests;
    */
    public $interests = [];

    /**
    * @var null|DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests_comparison $interests_comparison;
    */
    public $interests_comparison = null;
 
}