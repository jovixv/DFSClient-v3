<?php

namespace DFSClient\Entity\Custom;

use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsTop_stories;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsOrganic;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsPeople_also_ask;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsVideo;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsImages;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsLocal_pack;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsPeople_also_search;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsTwitter;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsKnowledge_graph;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsRelated_searches;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsGoogle_reviews;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsCarousel;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsPaid;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsShopping;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsFeatured_snippet;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsJobs;
use DFSClient\Entity\Custom\GetAdvancedSerpResultsByIdEntityItemsMap;

class GetAdvancedSerpResultsByIdEntityResult 
{    
    /**
    * @var null|string keyword;
    */
    public $keyword = null;        
    
    /**
    * @var null|string type;
    */
    public $type = null;        
    
    /**
    * @var null|string se_domain;
    */
    public $se_domain = null;        
    
    /**
    * @var null|integer location_code;
    */
    public $location_code = null;        
    
    /**
    * @var null|string language_code;
    */
    public $language_code = null;        
    
    /**
    * @var null|NULL check_url;
    */
    public $check_url = null;        
    
    /**
    * @var null|string datetime;
    */
    public $datetime = null;        
    
    /**
    * @var null|NULL target_rankings;
    */
    public $target_rankings = null;        
    
    /**
    * @var null|NULL spell;
    */
    public $spell = null;        
    
    /**
    * @var null|NULL elements;
    */
    public $elements = null;        
    
    /**
    * @var null|integer se_results_count;
    */
    public $se_results_count = null;        
    
    /**
    * @var null|integer items_count;
    */
    public $items_count = null;        
    
    /**
    * @var null|GetAdvancedSerpResultsByIdEntityItemsTop_stories[]|GetAdvancedSerpResultsByIdEntityItemsOrganic[]|GetAdvancedSerpResultsByIdEntityItemsPeople_also_ask[]|GetAdvancedSerpResultsByIdEntityItemsVideo[]|GetAdvancedSerpResultsByIdEntityItemsImages[]|GetAdvancedSerpResultsByIdEntityItemsLocal_pack[]|GetAdvancedSerpResultsByIdEntityItemsPeople_also_search[]|GetAdvancedSerpResultsByIdEntityItemsTwitter[]|GetAdvancedSerpResultsByIdEntityItemsKnowledge_graph[]|GetAdvancedSerpResultsByIdEntityItemsRelated_searches[]|GetAdvancedSerpResultsByIdEntityItemsGoogle_reviews[]|GetAdvancedSerpResultsByIdEntityItemsCarousel[]|GetAdvancedSerpResultsByIdEntityItemsPaid[]|GetAdvancedSerpResultsByIdEntityItemsShopping[]|GetAdvancedSerpResultsByIdEntityItemsFeatured_snippet[]|GetAdvancedSerpResultsByIdEntityItemsJobs[]|GetAdvancedSerpResultsByIdEntityItemsMap[] items;
    */
    public $items = null;        
     
}