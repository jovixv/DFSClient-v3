<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksResultPages;

class PageIntersectionLiveEntityMainTasksResult
{
    /**
     * @var null|PageIntersectionLiveEntityMainTasksResultPages;
     */
    public $pages = null;

    /**
     * @var null|null;
     */
    public $exclude_pages = null;

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
    public $total_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|PageIntersectionLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
