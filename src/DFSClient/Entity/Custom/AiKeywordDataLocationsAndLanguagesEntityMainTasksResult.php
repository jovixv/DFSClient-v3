<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\AiKeywordDataLocationsAndLanguagesEntityMainTasksResultAvailable_languages;

#[\AllowDynamicProperties]
class AiKeywordDataLocationsAndLanguagesEntityMainTasksResult 
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
    * @var array|AiKeywordDataLocationsAndLanguagesEntityMainTasksResultAvailable_languages[] $available_languages;
    */
    public $available_languages = [];
 
}