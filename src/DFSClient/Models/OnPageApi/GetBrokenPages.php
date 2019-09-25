<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetBrokenPages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_broken_pages';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
