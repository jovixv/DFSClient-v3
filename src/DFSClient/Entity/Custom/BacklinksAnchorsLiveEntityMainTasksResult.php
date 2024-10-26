<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksAnchorsLiveEntityMainTasksResultItems;

class BacklinksAnchorsLiveEntityMainTasksResult
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
     * @var array|BacklinksAnchorsLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
