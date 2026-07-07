<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $brand;
    */
    public $brand = null;

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedBrandsLiveEntityMainTasksResultItemsTotal $total;
    */
    public $total = null;
 
}