<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamLocationsAndLanguagesEntityMainTasksResultAvailable_languages;

#[\AllowDynamicProperties]
class ClickstreamLocationsAndLanguagesEntityMainTasksResult 
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
    * @var null|NULL $location_code_parent;
    */
    public $location_code_parent = null;

    /**
    * @var null|string $country_iso_code;
    */
    public $country_iso_code = null;

    /**
    * @var null|string $location_type;
    */
    public $location_type = null;

    /**
    * @var array|ClickstreamLocationsAndLanguagesEntityMainTasksResultAvailable_languages[] $available_languages;
    */
    public $available_languages = [];
 
}