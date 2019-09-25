<?php

namespace DFSClient\Models\SERP_API;

use DFSClient\Models\AbstractModel;

class SettingSerpGoogleReviewsTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_google_reviews_tasks_post';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;
}
