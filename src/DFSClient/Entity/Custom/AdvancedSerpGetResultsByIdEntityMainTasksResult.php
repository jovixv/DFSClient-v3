<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaid;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsOrganic;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTop_stories;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPeople_also_ask;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPeople_also_search;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImages;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTwitter;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_reviews;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsJobs;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMap;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsApp;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsLocal_pack;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarousel;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsVideo;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsFeatured_snippet;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_box;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsShopping;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_flights;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMention_carousel;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEvents;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRelated_searches;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMulti_carousel;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipes;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTop_sights;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsScholarly_articles;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPopular_products;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcasts;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsStocks_box;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsFind_results_on;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answers;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsHotels_pack;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsVisual_stories;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCommercial_units;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsLocal_services;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_carousel_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_description_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_expanded_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_images_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_list_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_row_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_part_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_shopping_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsNews_search;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMaps_search;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMaps_paid_item;
use DFSClientV3\Entity\Custom\AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImages_search;

class AdvancedSerpGetResultsByIdEntityMainTasksResult 
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
    * @var array|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPaid[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsOrganic[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTop_stories[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPeople_also_ask[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPeople_also_search[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImages[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTwitter[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_reviews[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_posts[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsJobs[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMap[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsApp[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsLocal_pack[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCarousel[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsVideo[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsFeatured_snippet[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsAnswer_box[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsShopping[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_flights[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMention_carousel[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsEvents[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRelated_searches[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMulti_carousel[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsRecipes[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsTop_sights[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsScholarly_articles[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPopular_products[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsPodcasts[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsStocks_box[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsFind_results_on[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsQuestions_and_answers[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsHotels_pack[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsVisual_stories[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsCommercial_units[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsLocal_services[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_carousel_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_description_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_expanded_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_images_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_list_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_row_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_part_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsKnowledge_graph_shopping_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsNews_search[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMaps_search[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsMaps_paid_item[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsImages_search[]|AdvancedSerpGetResultsByIdEntityMainTasksResultItemsGoogle_hotels[] $items;
    */
    public $items = [];
 
}
