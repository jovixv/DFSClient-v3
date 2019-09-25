<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetDuplicatePages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_duplicates';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
