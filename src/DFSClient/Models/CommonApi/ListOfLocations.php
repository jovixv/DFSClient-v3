<?php

namespace DFSClientV3\Models\CommonApi;

use DFSClientV3\Models\AbstractModel;

class ListOfLocations extends AbstractModel
{
    protected $requestToFunction = 'cmn_locations';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
