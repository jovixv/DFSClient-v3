<?php

namespace DFSClientV3\Models\SERP_API;

use DFSClientV3\Models\AbstractModel;

class GetSerpGoogleReviewsCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_google_reviews_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
