<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Similarweb;

use DFSClientV3\Models\AbstractModel;

class SimilarwebGetResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'domain_analytics/similarweb/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;

	protected $useNewMapper = true;

	public function setTaskId(string $taskUUID) {
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}

	/**
	 * @return \DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\SimilarwebGetResultsByIdEntityMain {
		return parent::get();
	}

}
