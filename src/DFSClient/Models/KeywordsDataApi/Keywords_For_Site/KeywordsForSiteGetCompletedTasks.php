<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Site;


use DFSClientV3\Models\AbstractModel;

class KeywordsForSiteGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_site/tasks_ready';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }
    /**
     * @return \DFSClientV3\Entity\Custom\KeywordsForSiteGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\KeywordsForSiteGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}