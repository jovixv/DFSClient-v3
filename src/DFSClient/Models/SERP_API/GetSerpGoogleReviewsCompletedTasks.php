<?php

namespace DFSClient\Models\SERP_API;

use DFSClient\Models\AbstractModel;

class GetSerpGoogleReviewsCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_google_reviews_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
