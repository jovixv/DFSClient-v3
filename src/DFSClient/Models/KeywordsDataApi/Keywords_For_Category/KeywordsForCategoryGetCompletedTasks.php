<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;


use DFSClientV3\Models\AbstractModel;

class KeywordsForCategoryGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_category/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\KeywordsForCategoryGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\KeywordsForCategoryGetCompletedTasksEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }
}
