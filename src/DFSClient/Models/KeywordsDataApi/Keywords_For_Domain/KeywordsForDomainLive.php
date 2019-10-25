<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Domain;

use DFSClientV3\Models\AbstractModel;

class KeywordsForDomainLive extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_domain';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    private $paths = [];

    /* public function setOpt(string $field, string $param)
     {

        switch ($field){
            case 'domain':
                $this->paths[0] = $param;
            break;

            case 'country_code':
                $this->paths[1] = $param;
            break;
            case 'language':
                $this->paths[2] = $param;
                break;
            case 'sort_by':
                $this->paths[3] = $param;
                break;

        }

        ksort($this->paths);
        return $this;
     }*/
}
