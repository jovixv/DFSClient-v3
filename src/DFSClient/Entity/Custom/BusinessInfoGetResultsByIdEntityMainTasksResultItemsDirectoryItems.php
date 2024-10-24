<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsRating;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hours;

class BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|integer;
     */
    public $rank_group = null;

    /**
     * @var null|integer;
     */
    public $rank_absolute = null;

    /**
     * @var null|null;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|null;
     */
    public $url = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsRating;
     */
    public $rating = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsRating_distribution;
     */
    public $rating_distribution = null;

    /**
     * @var null|null;
     */
    public $snippet = null;

    /**
     * @var null|string;
     */
    public $address = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsAddress_info;
     */
    public $address_info = null;

    /**
     * @var null|null;
     */
    public $place_id = null;

    /**
     * @var null|null;
     */
    public $phone = null;

    /**
     * @var null|string;
     */
    public $main_image = null;

    /**
     * @var null|null;
     */
    public $total_photos = null;

    /**
     * @var null|string;
     */
    public $category = null;

    /**
     * @var null|null;
     */
    public $additional_categories = null;

    /**
     * @var null|null;
     */
    public $price_level = null;

    /**
     * @var null|null;
     */
    public $hotel_rating = null;

    /**
     * @var null|null;
     */
    public $category_ids = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectoryItemsWork_hours;
     */
    public $work_hours = null;

    /**
     * @var null|string;
     */
    public $feature_id = null;

    /**
     * @var null|string;
     */
    public $cid = null;

    /**
     * @var null|double;
     */
    public $latitude = null;

    /**
     * @var null|double;
     */
    public $longitude = null;

    /**
     * @var null|null;
     */
    public $is_claimed = null;

    /**
     * @var null|null;
     */
    public $local_justifications = null;

    /**
     * @var null|boolean;
     */
    public $is_directory_item = null;
}
