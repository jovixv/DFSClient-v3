<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficEstimated;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSources;

class SimilarwebGetResultsByIdEntityMainTasksResultTraffic
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
     * @var array|SimilarwebGetResultsByIdEntityMainTasksResultTrafficCountries[];
     */
    public $countries = [];

    /**
     * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSources;
     */
    public $sources = null;

    /**
     * @var array|SimilarwebGetResultsByIdEntityMainTasksResultTrafficEstimated[];
     */
    public $estimated = [];
}
