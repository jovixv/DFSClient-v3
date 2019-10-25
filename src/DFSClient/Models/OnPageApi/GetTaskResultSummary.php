<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetTaskResultSummary extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
