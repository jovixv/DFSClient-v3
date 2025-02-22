<?php


namespace DFSClientV3\Models\MerchantApi\Google\Sellers;


use DFSClientV3\Models\AbstractModel;

class GoogleSellersGetAdvancedResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'merchant/google/sellers/task_get/advanced/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\GoogleSellersGetAdvancedResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleSellersGetAdvancedResultsByIdEntityMain
	{
		return parent::get();
	}
}
