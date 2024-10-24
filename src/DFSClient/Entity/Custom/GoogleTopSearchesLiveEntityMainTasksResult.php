<?php

namespace DFSClientV3\Entity\Custom;

class GoogleTopSearchesLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $se_type = null;

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
     * @var null|integer;
     */
    public $offset = null;

    /**
     * @var null|string;
     */
    public $offset_token = null;

    /**
     * @var array|GoogleTopSearchesLiveEntityMainTasksResultItems[];
     */
    public $items = [];
}
