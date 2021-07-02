<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends\Explore;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsGetResultsById extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/explore/task_get/{$taskUUID}';
    protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsGetResultsByIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsGetResultsByIdEntityMain
    {
        return parent::get();
    }

    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
        return $this;
    }
}
