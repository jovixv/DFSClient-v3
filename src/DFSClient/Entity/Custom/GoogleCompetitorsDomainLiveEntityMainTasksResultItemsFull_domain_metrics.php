<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid;

class GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metrics
{
    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsFull_domain_metricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
