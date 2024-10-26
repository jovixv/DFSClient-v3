<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\DFSLabsLocationsAndLanguagesEntityMainTasksResultAvailable_languages;

class DFSLabsLocationsAndLanguagesEntityMainTasksResult
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
     * @var null|integer;
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
     * array|DFSLabsLocationsAndLanguagesEntityMainTasksResultAvailable_languages[] $available_languages;.
     */
    public $available_languages = [];
}
