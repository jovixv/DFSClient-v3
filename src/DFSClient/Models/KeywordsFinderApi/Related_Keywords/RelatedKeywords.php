<?php

namespace DFSClient\Models\KeywordsFinderApi\Related_Keywords;

use DFSClient\Models\AbstractModel;

class RelatedKeywords extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_related_keywords_get';
    protected $pathToMainData = 'results->0->related';
    protected $method = 'POST';
    protected $isSupportedMerge = false;

    public function setKeywords($key)
    {
        $this->setOpt('keyword', $key);

        return $this;
    }
}
