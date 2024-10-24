<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsBacklinks_info;
use DFSClientV3\Entity\Custom\GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsLinks;
use DFSClientV3\Entity\Custom\GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsRank_changes;
use DFSClientV3\Entity\Custom\GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsRank_info;

class GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItems
{
    /**
     * @var null|string;
     */
    public $se_type = null;

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
    public $xpath = null;

    /**
     * @var null|string;
     */
    public $domain = null;

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
    public $breadcrumb = null;

    /**
     * @var null|string;
     */
    public $website_name = null;

    /**
     * @var null|boolean;
     */
    public $is_image = null;

    /**
     * @var null|boolean;
     */
    public $is_video = null;

    /**
     * @var null|boolean;
     */
    public $is_featured_snippet = null;

    /**
     * @var null|boolean;
     */
    public $is_malicious = null;

    /**
     * @var null|string;
     */
    public $description = null;

    /**
     * @var null|null;
     */
    public $pre_snippet = null;

    /**
     * @var null|null;
     */
    public $extended_snippet = null;

    /**
     * @var null|boolean;
     */
    public $amp_version = null;

    /**
     * @var null|null;
     */
    public $rating = null;

    /**
     * @var null|array;
     */
    public $highlighted = null;

    /**
     * @var array|GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsLinks[];
     */
    public $links = [];

    /**
     * @var null|null;
     */
    public $about_this_result = null;

    /**
     * @var null|string;
     */
    public $main_domain = null;

    /**
     * @var null|string;
     */
    public $relative_url = null;

    /**
     * @var null|integer;
     */
    public $etv = null;

    /**
     * @var null|double;
     */
    public $impressions_etv = null;

    /**
     * @var null|double;
     */
    public $estimated_paid_traffic_cost = null;

    /**
     * @var null|GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsRank_changes;
     */
    public $rank_changes = null;

    /**
     * @var null|GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsBacklinks_info;
     */
    public $backlinks_info = null;

    /**
     * @var null|GoogleHistoricalSERPsLiveEntityMainTasksResultItemsItemsRank_info;
     */
    public $rank_info = null;
}
