<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmResponses\ChatGpt;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesChatGptCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_responses/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesChatGptCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesChatGptCompletedTasksEntityMain {
		return parent::get();
	}
}
