<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutPopular_amenities;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAbout
{
    /**
     * @var null|string;
     */
    public $description = null;

    /**
     * @var null|array;
     */
    public $sub_descriptions = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutCheck_in_time;
     */
    public $check_in_time = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutCheck_out_time;
     */
    public $check_out_time = null;

    /**
     * @var null|string;
     */
    public $full_address = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutAmenities[];
     */
    public $amenities = [];

    /**
     * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutPopular_amenities[];
     */
    public $popular_amenities = [];
}
