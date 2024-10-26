<?php

namespace DFSClientV3\Entity\Custom;

class ExploreGetResultsByIdEntityMainTasksResult
{
    /**
     * @var null|array;
     */
    public $keywords = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|string;
     */
    public $check_url = null;

    /**
     * @var null|string;
     */
    public $datetime = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * array|ExploreGetResultsByIdEntityMainTasksResultItems[] $items;.
     */
    public $items = [];
}
