<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsTop_stories;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsOrganic;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPeople_also_ask;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsVideo;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsImages;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsLocal_pack;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsTwitter;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsKnowledge_graph;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsRelated_searches;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsGoogle_reviews;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsCarousel;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPaid;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsShopping;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsFeatured_snippet;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsJobs;
use DFSClientV3\Entity\Custom\GetAdvancedSerpResultsByIdEntityMainTasksResultItemsMap;

class GetAdvancedSerpResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|string $se_domain;
    */
    public $se_domain = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|string $check_url;
    */
    public $check_url = null;

    /**
    * @var null|string $datetime;
    */
    public $datetime = null;

    /**
    * array|GetAdvancedSerpResultsByIdEntityMainTasksResultTarget_rankings[] $target_rankings;
    */
    public $target_rankings = [];

    /**
    * @var null|NULL $spell;
    */
    public $spell = null;

    /**
    * @var null|array $item_types;
    */
    public $item_types = null;

    /**
    * @var null|integer $se_results_count;
    */
    public $se_results_count = null;

    /**
    * @var null|integer $items_count;
    */
    public $items_count = null;

    /**
    * array|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsTop_stories[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsOrganic[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPeople_also_ask[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsVideo[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsImages[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsLocal_pack[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPeople_also_search[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsTwitter[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsKnowledge_graph[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsRelated_searches[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsGoogle_reviews[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsCarousel[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsPaid[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsShopping[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsFeatured_snippet[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsJobs[]|GetAdvancedSerpResultsByIdEntityMainTasksResultItemsMap[] $items;
    */
    public $items = [];
 
}