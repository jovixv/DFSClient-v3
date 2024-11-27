<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficCountries;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficSources;
use DFSClientV3\Entity\Custom\SimilarwebLiveEntityMainTasksResultTrafficEstimated;

#[\AllowDynamicProperties]
class SimilarwebLiveEntityMainTasksResultTraffic 
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
    * @var array|SimilarwebLiveEntityMainTasksResultTrafficCountries[] $countries;
    */
    public $countries = [];

    /**
    * @var null|SimilarwebLiveEntityMainTasksResultTrafficSources $sources;
    */
    public $sources = null;

    /**
    * @var array|SimilarwebLiveEntityMainTasksResultTrafficEstimated[] $estimated;
    */
    public $estimated = [];
 
}