<?php

namespace DFSClient\Models\OnPageApi;

use DFSClient\Models\AbstractModel;

class GetLinksFromPage extends AbstractModel
{
    protected $requestToFunction = 'op_tasks_get_links_from';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
