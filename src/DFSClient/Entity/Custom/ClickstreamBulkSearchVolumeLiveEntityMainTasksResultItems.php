<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches;

class ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $search_volume = null;

    /**
     * @var array|ClickstreamBulkSearchVolumeLiveEntityMainTasksResultItemsMonthly_searches[];
     */
    public $monthly_searches = [];
}
