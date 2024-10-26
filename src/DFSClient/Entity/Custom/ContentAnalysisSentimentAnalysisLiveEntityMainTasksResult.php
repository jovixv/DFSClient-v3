<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distribution;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distribution;

class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResult
{
    /**
     * @var null|string;
     */
    public $type = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distribution;
     */
    public $positive_connotation_distribution = null;

    /**
     * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distribution;
     */
    public $sentiment_connotation_distribution = null;
}
