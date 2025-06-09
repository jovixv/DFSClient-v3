<?php


namespace DFSClientV3\Models\BusinessDataApi\Tripadvisor\Reviews;


use DFSClientV3\Models\AbstractModel;

class TripadvisorReviewsGetResultsByTaskId extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/tripadvisor/reviews/task_get/{$taskUID}';
    protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

    /**
     * @deprecated This method is not necessary, only 'tripadvisor'.
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $taskUID
     * @return $this
     */
    public function setTaskId(string $taskUID)
    {
        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\TripadvisorReviewsGetResultsByTaskIdEntityMain
    {
        return parent::get();
    }
}
