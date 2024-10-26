<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid;

class BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolute
{
    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absolutePaid;
     */
    public $paid = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteFeatured_snippet;
     */
    public $featured_snippet = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultMetrics_absoluteLocal_pack;
     */
    public $local_pack = null;
}
