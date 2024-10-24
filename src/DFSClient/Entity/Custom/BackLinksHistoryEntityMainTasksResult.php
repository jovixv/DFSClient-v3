<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksHistoryEntityMainTasksResultItemsBacklinks_history;

class BackLinksHistoryEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|string;
     */
    public $date_from = null;

    /**
     * @var null|string;
     */
    public $date_to = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|BackLinksHistoryEntityMainTasksResultItemsBacklinks_history[];
     */
    public $items = [];
}
