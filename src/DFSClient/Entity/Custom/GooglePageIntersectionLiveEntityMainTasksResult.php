<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GooglePageIntersectionLiveEntityMainTasksResultPages;

class GooglePageIntersectionLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|GooglePageIntersectionLiveEntityMainTasksResultPages;
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
     * @var array|GooglePageIntersectionLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
