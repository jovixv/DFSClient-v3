<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPrices;

class HotelInfoGetAdvancedResultsByIdEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $hotel_identifier = null;

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
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|integer;
     */
    public $stars = null;

    /**
     * @var null|string;
     */
    public $stars_description = null;

    /**
     * @var null|string;
     */
    public $address = null;

    /**
     * @var null|string;
     */
    public $phone = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultAbout;
     */
    public $about = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultLocation;
     */
    public $location = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultReviews;
     */
    public $reviews = null;

    /**
     * @var null|null;
     */
    public $overview_images = null;

    /**
     * @var null|HotelInfoGetAdvancedResultsByIdEntityMainTasksResultPrices;
     */
    public $prices = null;
}
