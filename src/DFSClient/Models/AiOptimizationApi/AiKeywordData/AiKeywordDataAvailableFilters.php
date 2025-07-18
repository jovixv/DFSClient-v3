<?php

namespace DFSClientV3\Models\AiOptimizationApi\AiKeywordData;

use DFSClientV3\Models\AbstractModel;

class AiKeywordDataAvailableFilters extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/ai_keyword_data/available_filters';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\AiKeywordDataAvailableFiltersEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AiKeywordDataAvailableFiltersEntityMain {
		return parent::get();
	}
}
