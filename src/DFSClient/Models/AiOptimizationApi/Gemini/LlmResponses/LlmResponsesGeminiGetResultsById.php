<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmResponses;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesGeminiGetResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_responses/task_get/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesGeminiGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesGeminiGetResultsByIdEntityMain {
		return parent::get();
	}
}
