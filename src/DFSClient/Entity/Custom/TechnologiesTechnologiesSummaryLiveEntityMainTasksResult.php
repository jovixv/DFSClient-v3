<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TechnologiesTechnologiesSummaryLiveEntityMainTasksResultContent_languages;
use DFSClientV3\Entity\Custom\TechnologiesTechnologiesSummaryLiveEntityMainTasksResultCountries;
use DFSClientV3\Entity\Custom\TechnologiesTechnologiesSummaryLiveEntityMainTasksResultKeywords;
use DFSClientV3\Entity\Custom\TechnologiesTechnologiesSummaryLiveEntityMainTasksResultLanguages;

class TechnologiesTechnologiesSummaryLiveEntityMainTasksResult
{
    /**
     * @var null|TechnologiesTechnologiesSummaryLiveEntityMainTasksResultCountries;
     */
    public $countries = null;

    /**
     * @var null|TechnologiesTechnologiesSummaryLiveEntityMainTasksResultLanguages;
     */
    public $languages = null;

    /**
     * @var null|TechnologiesTechnologiesSummaryLiveEntityMainTasksResultContent_languages;
     */
    public $content_languages = null;

    /**
     * @var null|TechnologiesTechnologiesSummaryLiveEntityMainTasksResultKeywords;
     */
    public $keywords = null;
}
