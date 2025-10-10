<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultTotalLocation;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultTotalLanguage;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultTotalPlatform;
use DFSClientV3\Entity\Custom\LlmMentionsTopPagesLiveEntityMainTasksResultTotalSources_domain;

#[\AllowDynamicProperties]
class LlmMentionsTopPagesLiveEntityMainTasksResultTotal 
{    
    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultTotalLocation[] $location;
    */
    public $location = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultTotalLanguage[] $language;
    */
    public $language = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultTotalPlatform[] $platform;
    */
    public $platform = [];

    /**
    * @var array|LlmMentionsTopPagesLiveEntityMainTasksResultTotalSources_domain[] $sources_domain;
    */
    public $sources_domain = [];

    /**
    * @var null|NULL $search_results_domain;
    */
    public $search_results_domain = null;
 
}