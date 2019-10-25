<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;


use DFSClientV3\Models\AbstractModel;

class KeywordsForCategoryGetCompletedTasks extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_category_tasks_get';
    protected $pathToMainData    = 'results';
    protected $method            = 'GET';
    protected $isSupportedMerge  = false;
}
