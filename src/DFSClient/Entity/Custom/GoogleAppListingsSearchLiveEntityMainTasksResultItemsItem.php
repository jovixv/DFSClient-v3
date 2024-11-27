<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps;

#[\AllowDynamicProperties]
class GoogleAppListingsSearchLiveEntityMainTasksResultItemsItem 
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
    * @var null|string $app_id;
    */
    public $app_id = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $icon;
    */
    public $icon = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|integer $reviews_count;
    */
    public $reviews_count = null;

    /**
    * @var null|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemRating $rating;
    */
    public $rating = null;

    /**
    * @var null|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice $price;
    */
    public $price = null;

    /**
    * @var null|boolean $is_free;
    */
    public $is_free = null;

    /**
    * @var null|string $main_category;
    */
    public $main_category = null;

    /**
    * @var null|string $installs;
    */
    public $installs = null;

    /**
    * @var null|integer $installs_count;
    */
    public $installs_count = null;

    /**
    * @var null|string $developer;
    */
    public $developer = null;

    /**
    * @var null|string $developer_id;
    */
    public $developer_id = null;

    /**
    * @var null|string $developer_url;
    */
    public $developer_url = null;

    /**
    * @var null|string $developer_email;
    */
    public $developer_email = null;

    /**
    * @var null|NULL $developer_address;
    */
    public $developer_address = null;

    /**
    * @var null|string $developer_website;
    */
    public $developer_website = null;

    /**
    * @var null|string $version;
    */
    public $version = '1.1.409';

    /**
    * @var null|string $minimum_os_version;
    */
    public $minimum_os_version = null;

    /**
    * @var null|NULL $size;
    */
    public $size = null;

    /**
    * @var null|string $released_date;
    */
    public $released_date = null;

    /**
    * @var null|string $last_update_date;
    */
    public $last_update_date = null;

    /**
    * @var null|string $update_notes;
    */
    public $update_notes = null;

    /**
    * @var null|array $images;
    */
    public $images = null;

    /**
    * @var null|NULL $videos;
    */
    public $videos = null;

    /**
    * @var array|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps[] $similar_apps;
    */
    public $similar_apps = [];

    /**
    * @var null|NULL $more_apps_by_developer;
    */
    public $more_apps_by_developer = null;

    /**
    * @var null|NULL $genres;
    */
    public $genres = null;

    /**
    * @var null|NULL $tags;
    */
    public $tags = null;
 
}