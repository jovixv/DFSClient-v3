<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPlace_topics;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsWork_time;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsPopular_times;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsLocal_business_links;
use DFSClientV3\Entity\Custom\BusinessListingsSearchLiveEntityMainTasksResultItemsContact_info;

#[\AllowDynamicProperties]
class BusinessListingsSearchLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|string $category;
    */
    public $category = null;

    /**
    * @var null|array $category_ids;
    */
    public $category_ids = null;

    /**
    * @var null|array $additional_categories;
    */
    public $additional_categories = null;

    /**
    * @var null|string $cid;
    */
    public $cid = null;

    /**
    * @var null|string $feature_id;
    */
    public $feature_id = null;

    /**
    * @var null|string $address;
    */
    public $address = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAddress_info $address_info;
    */
    public $address_info = null;

    /**
    * @var null|string $place_id;
    */
    public $place_id = null;

    /**
    * @var null|string $phone;
    */
    public $phone = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $logo;
    */
    public $logo = null;

    /**
    * @var null|string $main_image;
    */
    public $main_image = null;

    /**
    * @var null|integer $total_photos;
    */
    public $total_photos = null;

    /**
    * @var null|string $snippet;
    */
    public $snippet = null;

    /**
    * @var null|double $latitude;
    */
    public $latitude = null;

    /**
    * @var null|double $longitude;
    */
    public $longitude = null;

    /**
    * @var null|boolean $is_claimed;
    */
    public $is_claimed = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsAttributes $attributes;
    */
    public $attributes = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsPlace_topics $place_topics;
    */
    public $place_topics = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsRating_distribution $rating_distribution;
    */
    public $rating_distribution = null;

    /**
    * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsPeople_also_search[] $people_also_search;
    */
    public $people_also_search = [];

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsWork_time $work_time;
    */
    public $work_time = null;

    /**
    * @var null|BusinessListingsSearchLiveEntityMainTasksResultItemsPopular_times $popular_times;
    */
    public $popular_times = null;

    /**
    * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsLocal_business_links[] $local_business_links;
    */
    public $local_business_links = [];

    /**
    * @var array|BusinessListingsSearchLiveEntityMainTasksResultItemsContact_info[] $contact_info;
    */
    public $contact_info = [];

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;
 
}