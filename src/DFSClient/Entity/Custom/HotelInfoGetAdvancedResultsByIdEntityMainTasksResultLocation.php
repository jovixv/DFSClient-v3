<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationLocation_chain;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocation 
{    
    /**
    * @var null|string $neighborhood;
    */
    public $neighborhood = null;

    /**
    * @var null|string $neighborhood_description;
    */
    public $neighborhood_description = null;

    /**
    * @var null|string $maps_url;
    */
    public $maps_url = null;

    /**
    * @var null|double $overall_score;
    */
    public $overall_score = null;

    /**
    * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationScore_by_categories $score_by_categories;
    */
    public $score_by_categories = null;

    /**
    * @var null|double $latitude;
    */
    public $latitude = null;

    /**
    * @var null|double $longitude;
    */
    public $longitude = null;

    /**
    * @var array|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocationLocation_chain[] $location_chain;
    */
    public $location_chain = [];
 
}