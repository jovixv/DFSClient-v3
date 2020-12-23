<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\OnPageGetWaterfallEntityMainTasksResultItemsResources;

class OnPageGetWaterfallEntityMainTasksResultItems 
{    
    /**
    * @var null|string $page_url;
    */
    public $page_url = null;

    /**
    * @var null|integer $time_to_interactive;
    */
    public $time_to_interactive = null;

    /**
    * @var null|integer $dom_complete;
    */
    public $dom_complete = null;

    /**
    * @var null|integer $connection_time;
    */
    public $connection_time = null;

    /**
    * @var null|integer $time_to_secure_connection;
    */
    public $time_to_secure_connection = null;

    /**
    * @var null|integer $request_sent_time;
    */
    public $request_sent_time = null;

    /**
    * @var null|integer $waiting_time;
    */
    public $waiting_time = null;

    /**
    * @var null|integer $download_time;
    */
    public $download_time = null;

    /**
    * @var null|integer $duration_time;
    */
    public $duration_time = null;

    /**
    * @var null|integer $fetch_start;
    */
    public $fetch_start = null;

    /**
    * @var null|integer $fetch_end;
    */
    public $fetch_end = null;

    /**
    * @var array|OnPageGetWaterfallEntityMainTasksResultItemsResources[] $resources;
    */
    public $resources = [];
 
}