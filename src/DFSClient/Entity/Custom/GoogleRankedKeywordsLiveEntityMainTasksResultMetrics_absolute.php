<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack;

class GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolute 
{    
    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic $organic;
    */
    public $organic = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid $paid;
    */
    public $paid = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet $featured_snippet;
    */
    public $featured_snippet = null;

    /**
    * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack $local_pack;
    */
    public $local_pack = null;
 
}