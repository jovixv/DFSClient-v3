<?php

namespace DFSClientV3\Entity\Custom;

class GoogleAppIntersectionLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

    /**
     * @var null|array;
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
     * @var array|GoogleAppIntersectionLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
