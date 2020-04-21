<?php


namespace DFSClientV3\Models\MerchantApi\Amazon\Asin;


use DFSClientV3\Models\AbstractModel;

class AmazonAsinGetAdvancedResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'merchant/amazon/asin/task_get/advanced/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;

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
	 * @return \DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AmazonAsinGetAdvancedResultsByIdEntityMain
	{
		return parent::get();
	}
}