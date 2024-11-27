<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_tld;
use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_types;
use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_attributes;
use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_platform_types;
use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_semantic_locations;
use DFSClientV3\Entity\Custom\BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_countries;

#[\AllowDynamicProperties]
class BackLinksBulkPagesSummaryEntityMainTasksResultItems 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $url;
    */
    public $url = null;

    /**
    * @var null|integer $rank;
    */
    public $rank = null;

    /**
    * @var null|integer $main_domain_rank;
    */
    public $main_domain_rank = null;

    /**
    * @var null|integer $backlinks;
    */
    public $backlinks = null;

    /**
    * @var null|string $first_seen;
    */
    public $first_seen = null;

    /**
    * @var null|NULL $lost_date;
    */
    public $lost_date = null;

    /**
    * @var null|integer $backlinks_spam_score;
    */
    public $backlinks_spam_score = null;

    /**
    * @var null|integer $broken_backlinks;
    */
    public $broken_backlinks = null;

    /**
    * @var null|integer $broken_pages;
    */
    public $broken_pages = null;

    /**
    * @var null|integer $referring_domains;
    */
    public $referring_domains = null;

    /**
    * @var null|integer $referring_domains_nofollow;
    */
    public $referring_domains_nofollow = null;

    /**
    * @var null|integer $referring_main_domains;
    */
    public $referring_main_domains = null;

    /**
    * @var null|integer $referring_main_domains_nofollow;
    */
    public $referring_main_domains_nofollow = null;

    /**
    * @var null|integer $referring_ips;
    */
    public $referring_ips = null;

    /**
    * @var null|integer $referring_subnets;
    */
    public $referring_subnets = null;

    /**
    * @var null|integer $referring_pages;
    */
    public $referring_pages = null;

    /**
    * @var null|integer $referring_pages_nofollow;
    */
    public $referring_pages_nofollow = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_tld $referring_links_tld;
    */
    public $referring_links_tld = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_types $referring_links_types;
    */
    public $referring_links_types = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_attributes $referring_links_attributes;
    */
    public $referring_links_attributes = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_platform_types $referring_links_platform_types;
    */
    public $referring_links_platform_types = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_semantic_locations $referring_links_semantic_locations;
    */
    public $referring_links_semantic_locations = null;

    /**
    * @var null|BackLinksBulkPagesSummaryEntityMainTasksResultItemsReferring_links_countries $referring_links_countries;
    */
    public $referring_links_countries = null;
 
}