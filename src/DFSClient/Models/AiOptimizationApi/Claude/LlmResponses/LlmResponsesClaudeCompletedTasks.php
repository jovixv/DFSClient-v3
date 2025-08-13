<?php

namespace DFSClientV3\Models\AiOptimizationApi\Claude\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesClaudeCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/claude/llm_responses/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesClaudeCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesClaudeCompletedTasksEntityMain {
		return parent::get();
	}
}
