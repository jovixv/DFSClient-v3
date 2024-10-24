<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsAnswer_box;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsApp;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsCarousel;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsEvents;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsFeatured_snippet;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_flights;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_reviews;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsImages;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsJobs;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsKnowledge_graph;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsLocal_pack;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMap;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carousel;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsMulti_carousel;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsOrganic;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPaid;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_ask;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPodcasts;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsPopular_products;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsRecipes;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsRelated_searches;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsScholarly_articles;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsShopping;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_sights;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_stories;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsTwitter;
use DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMainTasksResultItemsVideo;

class SettingSerpLiveAdvancedEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $se_domain = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|string;
     */
    public $check_url = null;

    /**
     * @var null|string;
     */
    public $datetime = null;

    /**
     * @var null|null;
     */
    public $spell = null;

    /**
     * @var null|array;
     */
    public $item_types = null;

    /**
     * @var null|integer;
     */
    public $se_results_count = null;

    /**
     * @var null|integer;
     */
    public $items_count = null;

    /**
     * @var array|SettingSerpLiveAdvancedEntityMainTasksResultItemsPaid[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsOrganic[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_stories[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_ask[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPeople_also_search[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsImages[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsKnowledge_graph[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsTwitter[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_reviews[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsJobs[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsMap[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsApp[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsLocal_pack[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsCarousel[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsVideo[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsFeatured_snippet[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsAnswer_box[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsShopping[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsGoogle_flights[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsMention_carousel[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsEvents[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsRelated_searches[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsMulti_carousel[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsRecipes[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsTop_sights[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsScholarly_articles[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPopular_products[]|SettingSerpLiveAdvancedEntityMainTasksResultItemsPodcasts[];
     */
    public $items = [];
}
