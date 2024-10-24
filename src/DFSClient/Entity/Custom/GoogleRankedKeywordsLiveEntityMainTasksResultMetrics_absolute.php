<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic;
use DFSClientV3\Entity\Custom\GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid;

class GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolute
{
    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|GoogleRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack;
     */
    public $local_pack = null;
}
