<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetLinksToPage extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_links_to';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
