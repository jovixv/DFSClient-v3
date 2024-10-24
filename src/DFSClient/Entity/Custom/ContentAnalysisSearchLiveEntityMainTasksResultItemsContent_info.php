<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoConnotation_types;
use DFSClientV3\Entity\Custom\ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoSentiment_connotations;

class ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_info
{
    /**
     * @var null|string;
     */
    public $content_type = null;

    /**
     * @var null|string;
     */
    public $title = null;

    /**
     * @var null|null;
     */
    public $main_title = null;

    /**
     * @var null|null;
     */
    public $previous_title = null;

    /**
     * @var null|integer;
     */
    public $level = null;

    /**
     * @var null|string;
     */
    public $author = null;

    /**
     * @var null|string;
     */
    public $snippet = null;

    /**
     * @var null|integer;
     */
    public $snippet_length = null;

    /**
     * @var null|null;
     */
    public $social_metrics = null;

    /**
     * @var null|null;
     */
    public $highlighted_text = null;

    /**
     * @var null|string;
     */
    public $language = null;

    /**
     * @var null|ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoSentiment_connotations;
     */
    public $sentiment_connotations = null;

    /**
     * @var null|ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoConnotation_types;
     */
    public $connotation_types = null;

    /**
     * @var null|array;
     */
    public $text_category = null;

    /**
     * @var null|string;
     */
    public $date_published = null;

    /**
     * @var null|integer;
     */
    public $content_quality_score = null;

    /**
     * @var null|null;
     */
    public $semantic_location = null;

    /**
     * @var null|null;
     */
    public $rating = null;

    /**
     * @var null|string;
     */
    public $group_date = null;
}
