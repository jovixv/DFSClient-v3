<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultApp_competitors;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultApp_intersection;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultCategories_for_domain;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultCompetitors_domain;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultDatabase_rows_count;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultDomain_intersection;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultDomain_metrics_by_categories;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultDomain_whois_overview;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultKeyword_ideas;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultKeyword_suggestions;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_app;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_categories;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_site;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultPage_intersection;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultProduct_competitors;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultProduct_keyword_intersections;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywords;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRelated_keywords;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultRelevant_pages;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultSerp_competitors;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultSubdomains;
use DFSClientV3\Entity\Custom\DFSLabsAvailableFiltersEntityMainTasksResultTop_searches;

class DFSLabsAvailableFiltersEntityMainTasksResult
{
    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRelated_keywords;
     */
    public $related_keywords = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultKeyword_suggestions;
     */
    public $keyword_suggestions = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRanked_keywords;
     */
    public $ranked_keywords = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultKeyword_ideas;
     */
    public $keyword_ideas = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultSerp_competitors;
     */
    public $serp_competitors = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultRelevant_pages;
     */
    public $relevant_pages = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultSubdomains;
     */
    public $subdomains = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultCompetitors_domain;
     */
    public $competitors_domain = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultCategories_for_domain;
     */
    public $categories_for_domain = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_categories;
     */
    public $keywords_for_categories = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultDomain_intersection;
     */
    public $domain_intersection = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultPage_intersection;
     */
    public $page_intersection = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultDomain_whois_overview;
     */
    public $domain_whois_overview = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultTop_searches;
     */
    public $top_searches = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultDomain_metrics_by_categories;
     */
    public $domain_metrics_by_categories = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_site;
     */
    public $keywords_for_site = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultProduct_competitors;
     */
    public $product_competitors = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultProduct_keyword_intersections;
     */
    public $product_keyword_intersections = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultApp_intersection;
     */
    public $app_intersection = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultApp_competitors;
     */
    public $app_competitors = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultKeywords_for_app;
     */
    public $keywords_for_app = null;

    /**
     * @var null|DFSLabsAvailableFiltersEntityMainTasksResultDatabase_rows_count;
     */
    public $database_rows_count = null;
}
