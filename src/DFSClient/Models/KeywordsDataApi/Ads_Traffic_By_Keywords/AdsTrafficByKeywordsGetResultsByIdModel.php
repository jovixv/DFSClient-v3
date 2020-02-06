<?php


namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Keywords;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficByKeywordsGetResultsByIdModel extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/google/ad_traffic_by_keywords/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
	
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\KeywordsForCategoryGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\KeywordsForCategoryGetResultsByIdEntityMain
	{
		return parent::get();
	}
}