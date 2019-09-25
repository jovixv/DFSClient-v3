<?php

namespace DFSClient\Models\CommonApi;

use DFSClient\Models\AbstractModel;

class User extends AbstractModel
{
    protected $requestToFunction = 'cmn_user';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
