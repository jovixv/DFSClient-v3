<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $brand_category;
    */
    public $brand_category = null;

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedBrandCategoriesLiveEntityMainTasksResultItemsTotal $total;
    */
    public $total = null;
 
}