<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetTaskScanningStatus extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_status';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
