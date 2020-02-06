<?php


namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Platforms;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficByPlatformsGetResultsByIdModel extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/google/ad_traffic_by_platforms/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
	
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AdsTrafficByPlatformsGetResultsByIdEntityMain
	{
		return parent::get();
	}
}