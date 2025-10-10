<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultTotalLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultTotalLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultTotalPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopDomainsLiveEntityMainTasksResultTotalSources_domain;

#[\AllowDynamicProperties]
class LlmMentionsTopDomainsLiveEntityMainTasksResultTotal 
{    
    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultTotalLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultTotalLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultTotalPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopDomainsLiveEntityMainTasksResultTotalSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var null|NULL $search_results_domain;
    */
    public $search_results_domain = null;
 
}