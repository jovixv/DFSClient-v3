<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataBing_keyword_info;
use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;

class PageIntersectionLiveEntityMainTasksResultItemsKeyword_data
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
     * @var null|PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
     */
    public $keyword_info = null;

    /**
     * @var null|PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
     */
    public $impressions_info = null;

    /**
     * @var null|PageIntersectionLiveEntityMainTasksResultItemsKeyword_dataBing_keyword_info;
     */
    public $bing_keyword_info = null;

    /**
     * @var null|null;
     */
    public $serp_info = null;
}
