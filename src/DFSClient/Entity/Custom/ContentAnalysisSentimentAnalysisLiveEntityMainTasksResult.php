<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distribution;
use DFSClientV3\Entity\Custom\ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distribution;

#[\AllowDynamicProperties]
class ContentAnalysisSentimentAnalysisLiveEntityMainTasksResult 
{    
    /**
    * @var null|string $type;
    */
    public $type = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultPositive_connotation_distribution $positive_connotation_distribution;
    */
    public $positive_connotation_distribution = null;

    /**
    * @var null|ContentAnalysisSentimentAnalysisLiveEntityMainTasksResultSentiment_connotation_distribution $sentiment_connotation_distribution;
    */
    public $sentiment_connotation_distribution = null;
 
}