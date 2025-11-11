<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\LlmMentionsLocationsAndLanguagesEntityMainTasksResultAvailable_languages;

#[\AllowDynamicProperties]
class LlmMentionsLocationsAndLanguagesEntityMainTasksResult 
{    
    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $location_name;
    */
    public $location_name = null;

    /**
    * @var array|LlmMentionsLocationsAndLanguagesEntityMainTasksResultAvailable_languages[] $available_languages;
    */
    public $available_languages = [];
 
}