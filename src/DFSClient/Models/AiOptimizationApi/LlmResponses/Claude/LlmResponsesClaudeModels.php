<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmResponses\Claude;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesClaudeModels extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/claude/llm_responses/models';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesClaudeModelsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesClaudeModelsEntityMain {
		return parent::get();
	}
}
