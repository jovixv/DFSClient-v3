<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetResourcesEntityMainTasksResultItemsScriptChecks;

class OnPageGetResourcesEntityMainTasksResultItemsScript
{
    /**
     * @var null|string;
     */
    public $resource_type = null;

    /**
     * @var null|null;
     */
    public $meta = null;

    /**
     * @var null|integer;
     */
    public $status_code = null;

    /**
     * @var null|null;
     */
    public $location = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|integer;
     */
    public $size = null;

    /**
     * @var null|integer;
     */
    public $encoded_size = null;

    /**
     * @var null|integer;
     */
    public $total_transfer_size = null;

    /**
     * @var null|string;
     */
    public $fetch_time = null;

    /**
     * @var null|OnPageGetResourcesEntityMainTasksResultItemsScriptFetch_timing;
     */
    public $fetch_timing = null;

    /**
     * @var null|OnPageGetResourcesEntityMainTasksResultItemsScriptCache_control;
     */
    public $cache_control = null;

    /**
     * @var null|OnPageGetResourcesEntityMainTasksResultItemsScriptChecks;
     */
    public $checks = null;

    /**
     * @var null|string;
     */
    public $content_encoding = null;

    /**
     * @var null|string;
     */
    public $media_type = null;

    /**
     * @var null|string;
     */
    public $accept_type = null;

    /**
     * @var null|string;
     */
    public $server = null;
}
