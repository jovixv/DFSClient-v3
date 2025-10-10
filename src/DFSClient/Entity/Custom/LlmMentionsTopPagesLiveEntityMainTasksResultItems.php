<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultItemsLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultItemsLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultItemsPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultItemsSources_domain;

#[\AllowDynamicProperties]
class LlmMentionsTopPagesLiveEntityMainTasksResultItems 
{    
    /**
    * @var null|string $key;
    */
    public $key = null;

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultItemsLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultItemsLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultItemsPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultItemsSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var null|NULL $search_results_domain;
    */
    public $search_results_domain = null;
 
}