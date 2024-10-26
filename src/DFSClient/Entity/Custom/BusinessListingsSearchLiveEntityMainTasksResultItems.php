<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsContact_info;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsLocal_business_links;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPlace_topics;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPopular_times;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_time;

class BusinessListingsSearchLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

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
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAddress_info;
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
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAttributes;
     */
    public $attributes = null;

    /**
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsPlace_topics;
     */
    public $place_topics = null;

    /**
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsRating;
     */
    public $rating = null;

    /**
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsRating_distribution;
     */
    public $rating_distribution = null;

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsPeople_also_search[];
     */
    public $people_also_search = [];

    /**
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_time;
     */
    public $work_time = null;

    /**
     * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsPopular_times;
     */
    public $popular_times = null;

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsLocal_business_links[];
     */
    public $local_business_links = [];

    /**
     * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsContact_info[];
     */
    public $contact_info = [];

    /**
     * @var null|string;
     */
    public $check_url = null;

    /**
     * @var null|string;
     */
    public $last_updated_time = null;
}
