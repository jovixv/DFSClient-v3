<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelSearchesGetResultsByIdEntityMainTasksResultItemsPrices;

class HotelSearchesGetResultsByIdEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $hotel_identifier = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|integer;
     */
    public $stars = null;

    /**
     * @var null|boolean;
     */
    public $is_paid = null;

    /**
     * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsLocation;
     */
    public $location = null;

    /**
     * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsReviews;
     */
    public $reviews = null;

    /**
     * @var null|null;
     */
    public $overview_images = null;

    /**
     * @var null|HotelSearchesGetResultsByIdEntityMainTasksResultItemsPrices;
     */
    public $prices = null;
}
