<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelSearchesGetResultsByIdEntityMainTasksResultItemsPrices;

class HotelSearchesGetResultsByIdEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $hotel_identifier;
    */
    public $hotel_identifier = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|integer $stars;
    */
    public $stars = null;

    /**
    * @var null|boolean $is_paid;
    */
    public $is_paid = null;

    /**
    * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsLocation $location;
    */
    public $location = null;

    /**
    * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsReviews $reviews;
    */
    public $reviews = null;

    /**
    * @var null|NULL $overview_images;
    */
    public $overview_images = null;

    /**
    * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsPrices $prices;
    */
    public $prices = null;
 
}