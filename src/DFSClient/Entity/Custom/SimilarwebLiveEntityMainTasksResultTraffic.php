<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficEstimated;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSources;

class SimilarwebLiveEntityMainTasksResultTraffic
{
    /**
     * @var null|integer;
     */
    public $value = null;

    /**
     * @var null|integer;
     */
    public $percent = null;

    /**
     * @var array|SimilarwebLiveEntityMainTasksResultTrafficCountries[];
     */
    public $countries = [];

    /**
     * @var null|SimilarwebLiveEntityMainTasksResultTrafficSources;
     */
    public $sources = null;

    /**
     * @var array|SimilarwebLiveEntityMainTasksResultTrafficEstimated[];
     */
    public $estimated = [];
}
