<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsCategories_for_domain;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsCompetitors_domain;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsDomain_intersection;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsDomain_rank_overview;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeyword_ideas;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeyword_suggestions;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeywords_for_categories;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRanked_domains_by_category;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRanked_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRelated_keywords;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRelevant_pages;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsSerp_competitors;
use DFSClientV3\Entity\Custom\UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsSubdomains;

class UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labs
{
    /**
     * @var null|integer;
     */
    public $categories = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsCategories_for_domain;
     */
    public $categories_for_domain = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsCompetitors_domain;
     */
    public $competitors_domain = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsDomain_intersection;
     */
    public $domain_intersection = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsDomain_rank_overview;
     */
    public $domain_rank_overview = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeyword_ideas;
     */
    public $keyword_ideas = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeywords_for_categories;
     */
    public $keywords_for_categories = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsKeyword_suggestions;
     */
    public $keyword_suggestions = null;

    /**
     * @var null|integer;
     */
    public $locations_and_languages = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRanked_domains_by_category;
     */
    public $ranked_domains_by_category = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRanked_keywords;
     */
    public $ranked_keywords = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRelated_keywords;
     */
    public $related_keywords = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsRelevant_pages;
     */
    public $relevant_pages = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsSerp_competitors;
     */
    public $serp_competitors = null;

    /**
     * @var null|UserEntityMainTasksResultMoneyStatisticsDayDataforseo_labsSubdomains;
     */
    public $subdomains = null;
}
