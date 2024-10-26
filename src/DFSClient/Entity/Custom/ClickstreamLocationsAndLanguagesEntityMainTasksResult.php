<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ClickstreamLocationsAndLanguagesEntityMainTasksResultAvailable_languages;

class ClickstreamLocationsAndLanguagesEntityMainTasksResult
{
    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $location_name = null;

    /**
     * @var null|null;
     */
    public $location_code_parent = null;

    /**
     * @var null|string;
     */
    public $country_iso_code = null;

    /**
     * @var null|string;
     */
    public $location_type = null;

    /**
     * @var array|ClickstreamLocationsAndLanguagesEntityMainTasksResultAvailable_languages[];
     */
    public $available_languages = [];
}
