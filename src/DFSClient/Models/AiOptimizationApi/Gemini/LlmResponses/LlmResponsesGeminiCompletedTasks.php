<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesGeminiCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_responses/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesGeminiCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesGeminiCompletedTasksEntityMain {
		return parent::get();
	}
}
