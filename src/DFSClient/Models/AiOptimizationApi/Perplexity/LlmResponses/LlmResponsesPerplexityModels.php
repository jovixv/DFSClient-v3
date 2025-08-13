<?php

namespace DFSClientV3\Models\AiOptimizationApi\Perplexity\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesPerplexityModels extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/perplexity/llm_responses/models';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesPerplexityModelsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesPerplexityModelsEntityMain {
		return parent::get();
	}
}
