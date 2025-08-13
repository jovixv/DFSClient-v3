<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesChatGptGetResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_responses/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @param string $taskUUID
	 * @return $this
	 */
	public function setTaskId(string $taskUUID) {
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesChatGptGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesChatGptGetResultsByIdEntityMain {
		return parent::get();
	}
}
