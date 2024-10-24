<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations;

class SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResult
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
     * @var array|SearchVolumeHistoryGetLocationsAndLanguagesEntityMainTasksResultAvailable_locations[];
     */
    public $available_locations = [];
}
