<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmMentions;

use DFSClientV3\Models\AbstractModel;

class LlmMentionsAvailableFilters extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/llm_mentions/available_filters';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmMentionsAvailableFiltersEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmMentionsAvailableFiltersEntityMain {
		return parent::get();
	}

}
