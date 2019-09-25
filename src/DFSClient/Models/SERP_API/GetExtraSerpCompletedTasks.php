<?php

namespace DFSClient\Models\SERP_API;

use DFSClient\Models\AbstractModel;

class GetExtraSerpCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'srp_extra_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
