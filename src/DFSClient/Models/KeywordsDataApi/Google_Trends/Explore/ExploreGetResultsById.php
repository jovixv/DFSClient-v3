<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends\Explore;


use DFSClientV3\Models\AbstractModel;

class ExploreGetResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/google_trends/explore/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
	
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\ExploreGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\ExploreGetResultsByIdEntityMain
	{
		return parent::get();
	}
}