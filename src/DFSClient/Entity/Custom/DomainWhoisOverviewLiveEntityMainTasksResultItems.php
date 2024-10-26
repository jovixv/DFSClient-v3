<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainWhoisOverviewLiveEntityMainTasksResultItemsMetrics;

class DomainWhoisOverviewLiveEntityMainTasksResultItems
{
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
     * @var null|DomainWhoisOverviewLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;
}
