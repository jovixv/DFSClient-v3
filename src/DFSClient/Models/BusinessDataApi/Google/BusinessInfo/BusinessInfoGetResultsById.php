<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\BusinessInfo;


use DFSClientV3\Models\AbstractModel;

class BusinessInfoGetResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'business_data/{$se}/my_business_info/task_get/{$taskUUID}';
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
	 * @param string $seName
	 * @return $this
	 */
	public function setSe(string $seName)
	{
		$this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\BusinessInfoGetResultsByIdEntityMain
	{
		return parent::get();
	}
}
