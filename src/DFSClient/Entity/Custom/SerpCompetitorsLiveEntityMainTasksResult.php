<?php

namespace DFSClientV3\Entity\Custom;

class SerpCompetitorsLiveEntityMainTasksResult
{
    /**
     * @var null|array;
     */
    public $seed_keywords = null;

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
     * array|SerpCompetitorsLiveEntityMainTasksResultItems[] $items;.
     */
    public $items = [];
}
