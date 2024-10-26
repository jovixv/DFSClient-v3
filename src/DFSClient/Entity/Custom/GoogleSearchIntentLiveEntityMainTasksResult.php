<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleSearchIntentLiveEntityMainTasksResultItems;

class GoogleSearchIntentLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|GoogleSearchIntentLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
