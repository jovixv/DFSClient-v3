<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic;
use DFSClientV3\Entity\Custom\BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid;

class BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics
{
    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid;
     */
    public $paid = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|BingCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
