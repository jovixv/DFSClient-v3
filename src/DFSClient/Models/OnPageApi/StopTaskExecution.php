<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class StopTaskExecution extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_force_stop';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
