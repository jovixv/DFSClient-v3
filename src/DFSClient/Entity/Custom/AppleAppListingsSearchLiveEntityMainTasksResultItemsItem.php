<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemMore_apps_by_developer;

#[\AllowDynamicProperties]
class AppleAppListingsSearchLiveEntityMainTasksResultItemsItem 
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
    * @var null|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemRating $rating;
    */
    public $rating = null;

    /**
    * @var null|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice $price;
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
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * @var null|array $languages;
    */
    public $languages = null;

    /**
    * @var null|array $advisories;
    */
    public $advisories = null;

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
    * @var null|string $version;
    */
    public $version = '1.39.4';

    /**
    * @var null|string $minimum_os_version;
    */
    public $minimum_os_version = null;

    /**
    * @var null|string $size;
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
    * @var array|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps[] $similar_apps;
    */
    public $similar_apps = [];

    /**
    * @var array|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemMore_apps_by_developer[] $more_apps_by_developer;
    */
    public $more_apps_by_developer = [];
 
}