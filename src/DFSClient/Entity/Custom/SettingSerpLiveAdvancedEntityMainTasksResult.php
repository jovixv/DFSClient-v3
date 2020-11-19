<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_stories;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsOrganic;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_ask;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsVideo;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsImages;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsLocal_pack;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsTwitter;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsKnowledge_graph;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsRelated_searches;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_reviews;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsCarousel;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPaid;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsShopping;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsFeatured_snippet;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsJobs;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMap;

class SettingSerpLiveAdvancedEntityMainTasksResult 
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
    * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_stories[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsOrganic[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_ask[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsVideo[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsImages[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsLocal_pack[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_search[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsTwitter[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsKnowledge_graph[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsRelated_searches[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_reviews[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsCarousel[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPaid[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsShopping[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsFeatured_snippet[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsJobs[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsMap[] $items;
    */
    public $items = [];
 
}