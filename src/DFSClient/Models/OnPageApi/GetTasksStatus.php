<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetTasksStatus extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
