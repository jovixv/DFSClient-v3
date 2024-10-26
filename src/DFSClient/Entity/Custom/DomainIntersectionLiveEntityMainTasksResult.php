<?php

namespace DFSClientV3\Entity\Custom;

class DomainIntersectionLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target1 = null;

    /**
     * @var null|string;
     */
    public $target2 = null;

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
     * array|DomainIntersectionLiveEntityMainTasksResultItems[] $items;.
     */
    public $items = [];
}
