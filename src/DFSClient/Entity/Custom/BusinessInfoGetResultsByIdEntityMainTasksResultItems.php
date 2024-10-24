<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectory;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsPlace_topics;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsPopular_times;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMainTasksResultItemsWork_time;

class BusinessInfoGetResultsByIdEntityMainTasksResultItems
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
     * @var null|string;
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
     * @var null|array;
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
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsAddress_info;
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
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|null;
     */
    public $contact_url = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
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
     * @var null|integer;
     */
    public $questions_and_answers_count = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsAttributes;
     */
    public $attributes = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsPlace_topics;
     */
    public $place_topics = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|null;
     */
    public $hotel_rating = null;

    /**
     * @var null|null;
     */
    public $price_level = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsRating_distribution;
     */
    public $rating_distribution = null;

    /**
     * @var array|BusinessInfoGetResultsByIdEntityMainTasksResultItemsPeople_also_search[];
     */
    public $people_also_search = [];

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsWork_time;
     */
    public $work_time = null;

    /**
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsPopular_times;
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
     * @var null|BusinessInfoGetResultsByIdEntityMainTasksResultItemsDirectory;
     */
    public $directory = null;
}
