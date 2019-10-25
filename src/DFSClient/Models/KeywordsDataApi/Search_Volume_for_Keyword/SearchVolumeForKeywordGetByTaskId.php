<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.10.2018
 * Time: 12:40.
 */

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_for_Keyword;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeForKeywordGetByTaskId extends AbstractModel
{
    protected $requestToFunction = 'kwrd_sv_tasks_get';
    protected $pathToMainData = 'results';
    protected $method = 'GET';
    protected $isSupportedMerge = false;
}
