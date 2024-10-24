<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations;

class KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $language_name = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var array|KeywordPerformanceGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations[];
     */
    public $available_locations = [];
}
