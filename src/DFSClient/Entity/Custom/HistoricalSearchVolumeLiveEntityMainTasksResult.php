<?php

namespace DFSClientV3\Entity\Custom;

class HistoricalSearchVolumeLiveEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|HistoricalSearchVolumeLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
