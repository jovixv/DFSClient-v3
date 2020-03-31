<?php


namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Keywords;


use DFSClientV3\Models\AbstractModel;

class AdsTrafficByKeywordsGetResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/{$se}/ad_traffic_by_keywords/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $taskUUID
     * @return $this
     */
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\AdsTrafficByKeywordsGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AdsTrafficByKeywordsGetResultsByIdEntityMain
	{
		return parent::get();
	}
}