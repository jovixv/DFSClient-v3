<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultAnchors;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultBacklinks;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultCompetitors;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultContent_duplicates;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_intersection;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_pages;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_pages_summary;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultPage_intersection;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultReferring_domains;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultReferring_networks;

class BackLinksAvailableFiltersEntityMainTasksResult
{
    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultContent_duplicates;
     */
    public $content_duplicates = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultBacklinks;
     */
    public $backlinks = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_pages;
     */
    public $domain_pages = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultAnchors;
     */
    public $anchors = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultReferring_domains;
     */
    public $referring_domains = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_intersection;
     */
    public $domain_intersection = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultPage_intersection;
     */
    public $page_intersection = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultReferring_networks;
     */
    public $referring_networks = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_pages_summary;
     */
    public $domain_pages_summary = null;

    /**
     * @var null|BackLinksAvailableFiltersEntityMainTasksResultCompetitors;
     */
    public $competitors = null;
}
