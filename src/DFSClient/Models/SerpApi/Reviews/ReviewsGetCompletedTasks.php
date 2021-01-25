<?php


namespace DFSClientV3\Models\SerpApi\Reviews;


use DFSClientV3\Models\AbstractModel;

class ReviewsGetCompletedTasks extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'reviews/{$se}/tasks_ready';
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
     * @return \DFSClientV3\Entity\Custom\ReviewsGetCompletedTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\ReviewsGetCompletedTasksEntityMain
    {
        return parent::get();
    }

}
