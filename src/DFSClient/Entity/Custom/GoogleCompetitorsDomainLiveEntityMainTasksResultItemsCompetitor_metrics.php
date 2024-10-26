<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsFeatured_snippet;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsLocal_pack;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsOrganic;
use DFSClientV3\Entity\Custom\GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsPaid;

class GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metrics
{
    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsOrganic;
     */
    public $organic = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsPaid;
     */
    public $paid = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsLocal_pack;
     */
    public $local_pack = null;

    /**
     * @var null|GoogleCompetitorsDomainLiveEntityMainTasksResultItemsCompetitor_metricsFeatured_snippet;
     */
    public $featured_snippet = null;
}
