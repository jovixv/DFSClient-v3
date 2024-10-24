<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsPlace_topics;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsWork_time;

class BusinessInfoLiveEntityMainTasksResultItems
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
     * @var null|string;
     */
    public $position = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|null;
     */
    public $description = null;

    /**
     * @var null|string;
     */
    public $category = null;

    /**
     * @var null|array;
     */
    public $category_ids = null;

    /**
     * @var null|null;
     */
    public $additional_categories = null;

    /**
     * @var null|string;
     */
    public $cid = null;

    /**
     * @var null|string;
     */
    public $feature_id = null;

    /**
     * @var null|string;
     */
    public $address = null;

    /**
     * @var null|BusinessInfoLiveEntityMainTasksResultItemsAddress_info;
     */
    public $address_info = null;

    /**
     * @var null|string;
     */
    public $place_id = null;

    /**
     * @var null|string;
     */
    public $phone = null;

    /**
     * @var null|null;
     */
    public $url = null;

    /**
     * @var null|null;
     */
    public $contact_url = null;

    /**
     * @var null|null;
     */
    public $domain = null;

    /**
     * @var null|null;
     */
    public $logo = null;

    /**
     * @var null|string;
     */
    public $main_image = null;

    /**
     * @var null|integer;
     */
    public $total_photos = null;

    /**
     * @var null|string;
     */
    public $snippet = null;

    /**
     * @var null|double;
     */
    public $latitude = null;

    /**
     * @var null|double;
     */
    public $longitude = null;

    /**
     * @var null|boolean;
     */
    public $is_claimed = null;

    /**
     * @var null|BusinessInfoLiveEntityMainTasksResultItemsAttributes;
     */
    public $attributes = null;

    /**
     * @var null;
     */
    public $place_topics = null;

    /**
     * @var null|BusinessInfoLiveEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|null;
     */
    public $hotel_rating = null;

    /**
     * @var null|string;
     */
    public $price_level = null;

    /**
     * @var null;
     */
    public $rating_distribution = null;

    /**
     * @var array|BusinessInfoLiveEntityMainTasksResultItemsPeople_also_search[];
     */
    public $people_also_search = [];

    /**
     * @var null|BusinessInfoLiveEntityMainTasksResultItemsWork_time;
     */
    public $work_time = null;

    /**
     * @var null|null;
     */
    public $popular_times = null;

    /**
     * @var null|null;
     */
    public $local_business_links = null;

    /**
     * @var null|boolean;
     */
    public $is_directory_item = null;

    /**
     * @var null|null;
     */
    public $directory = null;
}
