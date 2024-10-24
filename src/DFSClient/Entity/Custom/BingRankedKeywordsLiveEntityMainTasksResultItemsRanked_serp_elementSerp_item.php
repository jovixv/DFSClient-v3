<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemBacklinks_info;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemLinks;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_changes;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_info;

class BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_item
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
     * @var array|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemLinks[];
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
     * @var null|double;
     */
    public $etv = null;

    /**
     * @var null|double;
     */
    public $estimated_paid_traffic_cost = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_changes;
     */
    public $rank_changes = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemBacklinks_info;
     */
    public $backlinks_info = null;

    /**
     * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_info;
     */
    public $rank_info = null;
}
