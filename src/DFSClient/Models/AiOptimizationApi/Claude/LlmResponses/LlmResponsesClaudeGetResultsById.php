<?php

namespace DFSClientV3\Models\AiOptimizationApi\Claude\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesClaudeGetResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'ai_optimization/claude/llm_responses/task_get/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesClaudeGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesClaudeGetResultsByIdEntityMain {
		return parent::get();
	}
}
