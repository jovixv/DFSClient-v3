<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksReferringDomainsLiveEntityMainTasksResultItemsBacklinks_referring_domain;

class BacklinksReferringDomainsLiveEntityMainTasksResult
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
     * @var array|BacklinksReferringDomainsLiveEntityMainTasksResultItemsBacklinks_referring_domain[];
     */
    public $items = [];
}
