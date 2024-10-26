<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests;
use DFSClientV3\Entity\Custom\DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests_comparison;

class DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItems
{
    /**
     * @var null|integer;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|array;
     */
    public $keywords = null;

    /**
     * @var array|DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests[];
     */
    public $interests = [];

    /**
     * @var null|DataforseoTrendsSubregionInterestsLiveEntityMainTasksResultItemsInterests_comparison;
     */
    public $interests_comparison = null;
}
