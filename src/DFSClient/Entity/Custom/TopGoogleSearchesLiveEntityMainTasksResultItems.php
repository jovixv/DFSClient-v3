<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\TopGoogleSearchesLiveEntityMainTasksResultItemsImpressions_info;

class TopGoogleSearchesLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $keyword = null;

    /**
     * @var null|integer;
     */
    public $location_code = null;

    /**
     * @var null|string;
     */
    public $language_code = null;

    /**
     * @var null|TopGoogleSearchesLiveEntityMainTasksResultItemsKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|null;
     */
    public $keyword_properties = null;

    /**
     * @var null|TopGoogleSearchesLiveEntityMainTasksResultItemsImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|null;
     */
    public $bing_keyword_info = null;

    /**
     * @var null|null;
     */
    public $serp_info = null;
}
