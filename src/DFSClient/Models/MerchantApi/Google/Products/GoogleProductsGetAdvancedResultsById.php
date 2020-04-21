<?php


namespace DFSClientV3\Models\MerchantApi\Google\Products;


use DFSClientV3\Models\AbstractModel;

class GoogleProductsGetAdvancedResultsById extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'merchant/google/products/task_get/advanced/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\GoogleProductsGetAdvancedResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleProductsGetAdvancedResultsByIdEntityMain
	{
		return parent::get();
	}
}