<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutPopular_amenities;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAbout 
{    
    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|array $sub_descriptions;
    */
    public $sub_descriptions = null;

    /**
    * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutCheck_in_time $check_in_time;
    */
    public $check_in_time = null;

    /**
    * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutCheck_out_time $check_out_time;
    */
    public $check_out_time = null;

    /**
    * @var null|string $full_address;
    */
    public $full_address = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutAmenities[] $amenities;
    */
    public $amenities = [];

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAboutPopular_amenities[] $popular_amenities;
    */
    public $popular_amenities = [];
 
}