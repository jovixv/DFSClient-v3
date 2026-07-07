<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsSources_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsSearch_results_domain;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsBrand_entities_title;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsBrand_entities_category;
use DFSClientV3\Entity\Custom\LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsTotal;

#[\AllowDynamicProperties]
class LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $page;
    */
    public $page = null;

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsSearch_results_domain[] $search_results_domain;
    */
    public $search_results_domain = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsBrand_entities_title[] $brand_entities_title;
    */
    public $brand_entities_title = [];

    /**
    * @var array|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsBrand_entities_category[] $brand_entities_category;
    */
    public $brand_entities_category = [];

    /**
    * @var null|LlmMentionsTopMentionedPagesLiveEntityMainTasksResultItemsTotal $total;
    */
    public $total = null;
 
}