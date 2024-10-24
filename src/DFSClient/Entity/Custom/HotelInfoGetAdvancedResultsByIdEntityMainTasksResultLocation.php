<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationLocation_chain;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocation
{
    /**
     * @var null|string;
     */
    public $neighborhood = null;

    /**
     * @var null|string;
     */
    public $neighborhood_description = null;

    /**
     * @var null|string;
     */
    public $maps_url = null;

    /**
     * @var null|double;
     */
    public $overall_score = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationScore_by_categories;
     */
    public $score_by_categories = null;

    /**
     * @var null|double;
     */
    public $latitude = null;

    /**
     * @var null|double;
     */
    public $longitude = null;

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationLocation_chain[];
     */
    public $location_chain = [];
}
