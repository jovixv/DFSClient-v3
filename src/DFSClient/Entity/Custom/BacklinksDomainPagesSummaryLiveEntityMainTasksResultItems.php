<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_attributes;
use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_platform_types;
use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_semantic_locations;
use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_tld;
use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_types;

class BacklinksDomainPagesSummaryLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|integer;
     */
    public $rank = null;

    /**
     * @var null|integer;
     */
    public $backlinks = null;

    /**
     * @var null|string;
     */
    public $first_seen = null;

    /**
     * @var null|null;
     */
    public $lost_date = null;

    /**
     * @var null|integer;
     */
    public $backlinks_spam_score = null;

    /**
     * @var null|integer;
     */
    public $broken_backlinks = null;

    /**
     * @var null|integer;
     */
    public $broken_pages = null;

    /**
     * @var null|integer;
     */
    public $referring_domains = null;

    /**
     * @var null|integer;
     */
    public $referring_main_domains = null;

    /**
     * @var null|integer;
     */
    public $referring_ips = null;

    /**
     * @var null|integer;
     */
    public $referring_subnets = null;

    /**
     * @var null|integer;
     */
    public $referring_pages = null;

    /**
     * @var null|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_tld;
     */
    public $referring_links_tld = null;

    /**
     * @var null|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_types;
     */
    public $referring_links_types = null;

    /**
     * @var null|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_attributes;
     */
    public $referring_links_attributes = null;

    /**
     * @var null|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_platform_types;
     */
    public $referring_links_platform_types = null;

    /**
     * @var null|BacklinksDomainPagesSummaryLiveEntityMainTasksResultItemsReferring_links_semantic_locations;
     */
    public $referring_links_semantic_locations = null;

    /**
     * @var null|array;
     */
    public $referring_links_countries = null;
}
