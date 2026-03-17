<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class OnPageGetInvalidResources extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'on_page/invalid_resources';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @param string $taskID
	 * @return $this
	 */
	public function setTaskId(string $taskID) {
		$this->payload['id'] = $taskID;
		return $this;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function setLimit(int $limit) {
		$this->payload['limit'] = $limit;
		return $this;
	}

	/**
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset(int $offset) {
		$this->payload['offset'] = $offset;
		return $this;
	}

	/**
	 * @param array $orderBy
	 * @return $this
	 */
	public function setOrderBy(array $orderBy) {
		$this->payload['order_by'] = $orderBy;
		return $this;
	}

	/**
	 * @param array $filter
	 * @return $this
	 */
	public function setFilter(array $filter) {
		$this->payload['filters'] = $filter;
		return $this;
	}

	/**
	 * @return \DFSClientV3\Entity\Custom\OnPageGetInvalidResourcesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\OnPageGetInvalidResourcesEntityMain {
		return parent::get();
	}
}
