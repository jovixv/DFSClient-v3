<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DomainWhoisOverviewLiveEntityMainTasksResultItems;

class DomainWhoisOverviewLiveEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|DomainWhoisOverviewLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
