<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelSearchesGetResultsByIdEntityMainTasksResultItems;

class HotelSearchesGetResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

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
     * @var array|HotelSearchesGetResultsByIdEntityMainTasksResultItems[];
     */
    public $items = [];
}
