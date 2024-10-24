<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetWaterfallEntityMainTasksResultItemsResources;

class OnPageGetWaterfallEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $page_url = null;

    /**
     * @var null|integer;
     */
    public $time_to_interactive = null;

    /**
     * @var null|integer;
     */
    public $dom_complete = null;

    /**
     * @var null|integer;
     */
    public $connection_time = null;

    /**
     * @var null|integer;
     */
    public $time_to_secure_connection = null;

    /**
     * @var null|integer;
     */
    public $request_sent_time = null;

    /**
     * @var null|integer;
     */
    public $waiting_time = null;

    /**
     * @var null|integer;
     */
    public $download_time = null;

    /**
     * @var null|integer;
     */
    public $duration_time = null;

    /**
     * @var null|integer;
     */
    public $fetch_start = null;

    /**
     * @var null|integer;
     */
    public $fetch_end = null;

    /**
     * @var array|OnPageGetWaterfallEntityMainTasksResultItemsResources[];
     */
    public $resources = [];
}
