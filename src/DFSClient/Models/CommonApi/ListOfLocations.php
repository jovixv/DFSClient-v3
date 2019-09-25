<?php

namespace DFSClient\Models\CommonApi;

use DFSClient\Models\AbstractModel;

class ListOfLocations extends AbstractModel
{
    protected $requestToFunction = 'cmn_locations';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
