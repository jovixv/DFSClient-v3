<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
use DFSClientV3\Entity\Custom\GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps;

class GoogleAppListingsSearchLiveEntityMainTasksResultItemsItem
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
    public $app_id = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|string;
     */
    public $icon = null;

    /**
     * @var null|string;
     */
    public $description = null;

    /**
     * @var null|integer;
     */
    public $reviews_count = null;

    /**
     * @var null|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
     */
    public $rating = null;

    /**
     * @var null|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
     */
    public $price = null;

    /**
     * @var null|boolean;
     */
    public $is_free = null;

    /**
     * @var null|string;
     */
    public $main_category = null;

    /**
     * @var null|string;
     */
    public $installs = null;

    /**
     * @var null|integer;
     */
    public $installs_count = null;

    /**
     * @var null|string;
     */
    public $developer = null;

    /**
     * @var null|string;
     */
    public $developer_id = null;

    /**
     * @var null|string;
     */
    public $developer_url = null;

    /**
     * @var null|string;
     */
    public $developer_email = null;

    /**
     * @var null|null;
     */
    public $developer_address = null;

    /**
     * @var null|string;
     */
    public $developer_website = null;

    /**
     * @var null|string;
     */
    public $version = '1.1.409';

    /**
     * @var null|string;
     */
    public $minimum_os_version = null;

    /**
     * @var null|null;
     */
    public $size = null;

    /**
     * @var null|string;
     */
    public $released_date = null;

    /**
     * @var null|string;
     */
    public $last_update_date = null;

    /**
     * @var null|string;
     */
    public $update_notes = null;

    /**
     * @var null|array;
     */
    public $images = null;

    /**
     * @var null|null;
     */
    public $videos = null;

    /**
     * @var array|GoogleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps[];
     */
    public $similar_apps = [];

    /**
     * @var null|null;
     */
    public $more_apps_by_developer = null;

    /**
     * @var null|null;
     */
    public $genres = null;

    /**
     * @var null|null;
     */
    public $tags = null;
}
