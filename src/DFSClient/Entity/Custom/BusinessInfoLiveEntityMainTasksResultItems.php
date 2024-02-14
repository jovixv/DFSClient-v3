<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsAddress_info;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsAttributes;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsPlace_topics;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsRating;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsRating_distribution;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\BusinessInfoLiveEntityMainTasksResultItemsWork_time;

class BusinessInfoLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|integer $rank_group;
    */
    public $rank_group = null;

    /**
    * @var null|integer $rank_absolute;
    */
    public $rank_absolute = null;

    /**
    * @var null|string $position;
    */
    public $position = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|NULL $description;
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
    * @var null|NULL $additional_categories;
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
    * @var null|BusinessInfoLiveEntityMainTasksResultItemsAddress_info $address_info;
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
    * @var null|NULL $url;
    */
    public $url = null;

    /**
    * @var null|NULL $contact_url;
    */
    public $contact_url = null;

    /**
    * @var null|NULL $domain;
    */
    public $domain = null;

    /**
    * @var null|NULL $logo;
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
    * @var null|BusinessInfoLiveEntityMainTasksResultItemsAttributes $attributes;
    */
    public $attributes = null;

    /**
    * @var null $place_topics;
    */
    public $place_topics = null;

    /**
    * @var null|BusinessInfoLiveEntityMainTasksResultItemsRating $rating;
    */
    public $rating = null;

    /**
    * @var null|NULL $hotel_rating;
    */
    public $hotel_rating = null;

    /**
    * @var null|string $price_level;
    */
    public $price_level = null;

    /**
    * @var null $rating_distribution;
    */
    public $rating_distribution = null;

    /**
    * @var array|BusinessInfoLiveEntityMainTasksResultItemsPeople_also_search[] $people_also_search;
    */
    public $people_also_search = [];

    /**
    * @var null|BusinessInfoLiveEntityMainTasksResultItemsWork_time $work_time;
    */
    public $work_time = null;

    /**
    * @var null|NULL $popular_times;
    */
    public $popular_times = null;

    /**
    * @var null|NULL $local_business_links;
    */
    public $local_business_links = null;

    /**
    * @var null|boolean $is_directory_item;
    */
    public $is_directory_item = null;

    /**
    * @var null|NULL $directory;
    */
    public $directory = null;
 
}
