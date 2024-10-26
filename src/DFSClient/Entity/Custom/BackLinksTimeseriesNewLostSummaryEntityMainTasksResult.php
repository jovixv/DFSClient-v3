<?php

namespace DFSClientV3\Entity\Custom;

class BackLinksTimeseriesNewLostSummaryEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target = null;

    /**
     * @var null|null;
     */
    public $date_from = null;

    /**
     * @var null|null;
     */
    public $date_to = null;

    /**
     * @var null|string;
     */
    public $group_range = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|BackLinksTimeseriesNewLostSummaryEntityMainTasksResultItems[];
     */
    public $items = [];
}
