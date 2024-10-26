<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ExploreGetResultsByIdEntityMainTasksResultItemsData;

class ExploreGetResultsByIdEntityMainTasksResultItems
{
    /**
     * @var null|integer;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|array;
     */
    public $keywords = null;

    /**
     * array|ExploreGetResultsByIdEntityMainTasksResultItemsData[] $data;.
     */
    public $data = [];

    /**
     * @var null|array;
     */
    public $averages = null;
}
