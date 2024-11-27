<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoSentiment_connotations;
use DFSClientV3\Entity\Custom\ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoConnotation_types;

#[\AllowDynamicProperties]
class ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_info 
{    
    /**
    * @var null|string $content_type;
    */
    public $content_type = null;

    /**
    * @var null|string $title;
    */
    public $title = null;

    /**
    * @var null|NULL $main_title;
    */
    public $main_title = null;

    /**
    * @var null|NULL $previous_title;
    */
    public $previous_title = null;

    /**
    * @var null|integer $level;
    */
    public $level = null;

    /**
    * @var null|string $author;
    */
    public $author = null;

    /**
    * @var null|string $snippet;
    */
    public $snippet = null;

    /**
    * @var null|integer $snippet_length;
    */
    public $snippet_length = null;

    /**
    * @var null|NULL $social_metrics;
    */
    public $social_metrics = null;

    /**
    * @var null|NULL $highlighted_text;
    */
    public $highlighted_text = null;

    /**
    * @var null|string $language;
    */
    public $language = null;

    /**
    * @var null|ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoSentiment_connotations $sentiment_connotations;
    */
    public $sentiment_connotations = null;

    /**
    * @var null|ContentAnalysisSearchLiveEntityMainTasksResultItemsContent_infoConnotation_types $connotation_types;
    */
    public $connotation_types = null;

    /**
    * @var null|array $text_category;
    */
    public $text_category = null;

    /**
    * @var null|string $date_published;
    */
    public $date_published = null;

    /**
    * @var null|integer $content_quality_score;
    */
    public $content_quality_score = null;

    /**
    * @var null|NULL $semantic_location;
    */
    public $semantic_location = null;

    /**
    * @var null|NULL $rating;
    */
    public $rating = null;

    /**
    * @var null|string $group_date;
    */
    public $group_date = null;
 
}