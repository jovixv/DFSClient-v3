<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemLinks;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_changes;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemBacklinks_info;
use DFSClientV3\Entity\Custom\BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_info;

#[\AllowDynamicProperties]
class BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_item 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

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
    * @var null|string $xpath;
    */
    public $xpath = null;

    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|string $breadcrumb;
    */
    public $breadcrumb = null;

    /**
    * @var null|boolean $is_image;
    */
    public $is_image = null;

    /**
    * @var null|boolean $is_video;
    */
    public $is_video = null;

    /**
    * @var null|boolean $is_featured_snippet;
    */
    public $is_featured_snippet = null;

    /**
    * @var null|boolean $is_malicious;
    */
    public $is_malicious = null;

    /**
    * @var null|string $description;
    */
    public $description = null;

    /**
    * @var null|NULL $pre_snippet;
    */
    public $pre_snippet = null;

    /**
    * @var null|NULL $extended_snippet;
    */
    public $extended_snippet = null;

    /**
    * @var null|boolean $amp_version;
    */
    public $amp_version = null;

    /**
    * @var null|NULL $rating;
    */
    public $rating = null;

    /**
    * @var null|array $highlighted;
    */
    public $highlighted = null;

    /**
    * @var array|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemLinks[] $links;
    */
    public $links = [];

    /**
    * @var null|NULL $about_this_result;
    */
    public $about_this_result = null;

    /**
    * @var null|string $main_domain;
    */
    public $main_domain = null;

    /**
    * @var null|string $relative_url;
    */
    public $relative_url = null;

    /**
    * @var null|double $etv;
    */
    public $etv = null;

    /**
    * @var null|double $estimated_paid_traffic_cost;
    */
    public $estimated_paid_traffic_cost = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_changes $rank_changes;
    */
    public $rank_changes = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemBacklinks_info $backlinks_info;
    */
    public $backlinks_info = null;

    /**
    * @var null|BingRankedKeywordsLiveEntityMainTasksResultItemsRanked_serp_elementSerp_itemRank_info $rank_info;
    */
    public $rank_info = null;
 
}
