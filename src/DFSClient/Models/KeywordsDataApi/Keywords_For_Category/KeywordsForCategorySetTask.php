<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;


use DFSClientV3\Models\AbstractModel;

class KeywordsForCategorySetTask extends AbstractModel
{
    protected $requestToFunction = 'kwrd_for_category_tasks_post';
    protected $pathToMainData    = 'results';
    protected $method            = 'POST';
    protected $isSupportedMerge  = true;
}
