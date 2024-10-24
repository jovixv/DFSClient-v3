<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;

use DFSClientV3\Entity\Custom\KeywordsForCategoryGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordsForCategoryGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_category/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @return KeywordsForCategoryGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): KeywordsForCategoryGetResultsByIdEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }
}
