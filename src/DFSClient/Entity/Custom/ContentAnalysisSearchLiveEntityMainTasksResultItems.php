<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_info;

class ContentAnalysisSearchLiveEntityMainTasksResultItems
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|string;
     */
    public $url = null;

    /**
     * @var null|string;
     */
    public $domain = null;

    /**
     * @var null|string;
     */
    public $main_domain = null;

    /**
     * @var null|integer;
     */
    public $url_rank = null;

    /**
     * @var null|integer;
     */
    public $spam_score = null;

    /**
     * @var null|integer;
     */
    public $domain_rank = null;

    /**
     * @var null|string;
     */
    public $fetch_time = null;

    /**
     * @var null|null;
     */
    public $country = null;

    /**
     * @var null|string;
     */
    public $language = null;

    /**
     * @var null|double;
     */
    public $score = null;

    /**
     * @var null|array;
     */
    public $page_category = null;

    /**
     * @var null|array;
     */
    public $page_types = null;

    /**
     * @var null|null;
     */
    public $ratings = null;

    /**
     * @var null|null;
     */
    public $social_metrics = null;

    /**
     * @var null|ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_info;
     */
    public $content_info = null;
}
