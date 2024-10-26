<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksBacklinksLiveEntityMainTasksResultItemsBacklink;

class BacklinksBacklinksLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|string;
     */
    public $mode = null;

    /**
     * @var null|integer;
     */
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|BacklinksBacklinksLiveEntityMainTasksResultItemsBacklink[];
     */
    public $items = [];
}
