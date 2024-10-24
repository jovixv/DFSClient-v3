<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemMore_apps_by_developer;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps;

class AppleAppListingsSearchLiveEntityMainTasksResultItemsItem
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
     * @var null|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemRating;
     */
    public $rating = null;

    /**
     * @var null|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemPrice;
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
     * @var null|array;
     */
    public $categories = null;

    /**
     * @var null|array;
     */
    public $languages = null;

    /**
     * @var null|array;
     */
    public $advisories = null;

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
    public $version = '1.39.4';

    /**
     * @var null|string;
     */
    public $minimum_os_version = null;

    /**
     * @var null|string;
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
     * @var array|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemSimilar_apps[];
     */
    public $similar_apps = [];

    /**
     * @var array|AppleAppListingsSearchLiveEntityMainTasksResultItemsItemMore_apps_by_developer[];
     */
    public $more_apps_by_developer = [];
}
