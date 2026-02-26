<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiGetAdvancedResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/task_get/advanced/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiGetAdvancedResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiGetAdvancedResultsByIdEntityMain {
		return parent::get();
	}
}
