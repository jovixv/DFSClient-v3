<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TopGoogleSearchesLiveEntityMainTasksResultItems;

class TopGoogleSearchesLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $offset_token = null;

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
     * @var array|TopGoogleSearchesLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
