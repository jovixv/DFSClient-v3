<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $domain;
    */
    public $domain = null;

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedDomainsLiveEntityMainTasksResultItemsTotal $total;
    */
    public $total = null;
 
}