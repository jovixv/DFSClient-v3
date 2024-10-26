<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppIntersectionLiveEntityMainTasksResultApp_ids;

class AppleAppIntersectionLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|AppleAppIntersectionLiveEntityMainTasksResultApp_ids;
     */
    public $app_ids = null;

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
     * @var array|AppleAppIntersectionLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
