<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmResponses\Gemini;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesGeminiModels extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_responses/models';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesGeminiModelsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesGeminiModelsEntityMain {
		return parent::get();
	}
}
