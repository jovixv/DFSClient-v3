<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations;

#[\AllowDynamicProperties]
class SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResult 
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
    * @var array|SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations[] $available_locations;
    */
    public $available_locations = [];
 
}