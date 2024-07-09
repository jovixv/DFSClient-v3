<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_History;

use DFSClientV3\Models\AbstractModel;

class SearchVolumeHistoryGetResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/{$se}/search_volume_history/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

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
     * 'bing' only
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }
	
	/**
	 * @return \DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\SearchVolumeHistoryGetResultsByIdEntityMain
	{
		return parent::get();
	}
}
