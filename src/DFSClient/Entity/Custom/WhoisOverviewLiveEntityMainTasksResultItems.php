<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\WhoisOverviewLiveEntityMainTasksResultItemsMetrics;

class WhoisOverviewLiveEntityMainTasksResultItems
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
     * @var null|string;
     */
    public $registrar = null;

    /**
     * @var null|WhoisOverviewLiveEntityMainTasksResultItemsMetrics;
     */
    public $metrics = null;
}
