<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultItemsSources_domain;

#[\AllowDynamicProperties]
class LlmMentionsTopDomainsLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $key;
    */
    public $key = null;

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var null|NULL $search_results_domain;
    */
    public $search_results_domain = null;
 
}