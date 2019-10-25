<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class GetBrokenPages extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_broken_pages';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
