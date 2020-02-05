<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeForKeywordLive extends AbstractModel
{
    # v2
    protected $requestToFunction = 'kwrd_sv';
    protected $pathToMainData = 'results';
    protected $method = 'POST';
    protected $isSupportedMerge = true;

    # v3
    protected $requestToFunctionV3 = 'keywords_data/{searchEngine}/live/search_volume';
    protected $pathToMainDataV3 = 'tasks->{postID}->result';
    protected $methodV3 = 'POST';
    protected $isSupportedMergeV3 = false;

    public function test()
    {
        //TODO
    }
}
