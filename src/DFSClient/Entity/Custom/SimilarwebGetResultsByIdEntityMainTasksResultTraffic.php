<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficSources;
use DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMainTasksResultTrafficEstimated;

class SimilarwebGetResultsByIdEntityMainTasksResultTraffic 
{    
    /**
    * @var null|integer $value;
    */
    public $value = null;

    /**
    * @var null|integer $percent;
    */
    public $percent = null;

    /**
    * @var array|SimilarwebGetResultsByIdEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|SimilarwebGetResultsByIdEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var array|SimilarwebGetResultsByIdEntityMainTasksResultTrafficEstimated[] $estimated;
    */
    public $estimated = [];
 
}