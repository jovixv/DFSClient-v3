<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesChatGptModels extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_responses/models';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesChatGptModelsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesChatGptModelsEntityMain {
		return parent::get();
	}
}
