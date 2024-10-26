<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsBacklinks_info;
use DFSClientV3\Entity\Custom\GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetrics;

class GoogleDomainWhoisOverviewLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $created_datetime = null;

    /**
     * @var null|string;
     */
    public $changed_datetime = null;

    /**
     * @var null|string;
     */
    public $expiration_datetime = null;

    /**
     * @var null|string;
     */
    public $updated_datetime = null;

    /**
     * @var null|string;
     */
    public $first_seen = null;

    /**
     * @var null|array;
     */
    public $epp_status_codes = null;

    /**
     * @var null|string;
     */
    public $tld = null;

    /**
     * @var null|boolean;
     */
    public $registered = null;

    /**
     * @var null|null;
     */
    public $registrar = null;

    /**
     * @var null|GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;

    /**
     * @var null|GoogleDomainWhoisOverviewLiveEntityMainTasksResultItemsBacklinks_info;
     */
    public $backlinks_info = null;
}
