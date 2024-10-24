<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksSummaryEntityMainTasksResultInfo;

class BackLinksSummaryEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $target = null;

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
    public $rank = null;

    /**
     * @var null|integer;
     */
    public $backlinks = null;

    /**
     * @var null|integer;
     */
    public $crawled_pages = null;

    /**
     * @var null|BackLinksSummaryEntityMainTasksResultInfo;
     */
    public $info = null;

    /**
     * @var null|integer;
     */
    public $internal_links_count = null;

    /**
     * @var null|integer;
     */
    public $external_links_count = null;

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
     * @var null|array;
     */
    public $referring_links_tld = null;

    /**
     * @var null|array;
     */
    public $referring_links_types = null;

    /**
     * @var null|array;
     */
    public $referring_links_attributes = null;

    /**
     * @var null|array;
     */
    public $referring_links_platform_types = null;

    /**
     * @var null|array;
     */
    public $referring_links_semantic_locations = null;

    /**
     * @var null|array;
     */
    public $referring_links_countries = null;
}
