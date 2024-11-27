<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultContent_duplicates;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultBacklinks;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_pages;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultAnchors;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultReferring_domains;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_intersection;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultPage_intersection;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultReferring_networks;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultDomain_pages_summary;
use DFSClientV3\Entity\Custom\BackLinksAvailableFiltersEntityMainTasksResultCompetitors;

#[\AllowDynamicProperties]
class BackLinksAvailableFiltersEntityMainTasksResult 
{    
    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultContent_duplicates $content_duplicates;
    */
    public $content_duplicates = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultBacklinks $backlinks;
    */
    public $backlinks = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_pages $domain_pages;
    */
    public $domain_pages = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultAnchors $anchors;
    */
    public $anchors = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultReferring_domains $referring_domains;
    */
    public $referring_domains = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_intersection $domain_intersection;
    */
    public $domain_intersection = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultPage_intersection $page_intersection;
    */
    public $page_intersection = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultReferring_networks $referring_networks;
    */
    public $referring_networks = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultDomain_pages_summary $domain_pages_summary;
    */
    public $domain_pages_summary = null;

    /**
    * @var null|BackLinksAvailableFiltersEntityMainTasksResultCompetitors $competitors;
    */
    public $competitors = null;
 
}