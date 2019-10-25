<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetDuplicatePages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_duplicates';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
