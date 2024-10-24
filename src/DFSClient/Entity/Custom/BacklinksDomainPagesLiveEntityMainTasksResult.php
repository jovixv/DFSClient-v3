<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksDomainPagesLiveEntityMainTasksResultItemsBacklinks_domain_page;

class BacklinksDomainPagesLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|BacklinksDomainPagesLiveEntityMainTasksResultItemsBacklinks_domain_page[];
     */
    public $items = [];
}
