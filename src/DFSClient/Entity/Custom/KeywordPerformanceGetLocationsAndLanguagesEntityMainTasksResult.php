<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations;

class KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResult 
{    
    /**
    * @var null|string $language_name;
    */
    public $language_name = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var array|KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations[] $available_locations;
    */
    public $available_locations = [];
 
}