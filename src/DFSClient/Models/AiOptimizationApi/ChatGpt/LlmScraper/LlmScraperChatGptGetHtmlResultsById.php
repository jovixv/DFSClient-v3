<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperChatGptGetHtmlResultsById extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->0->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_scraper/task_get/html/{$taskUUID}';
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
	 * @return \DFSClientV3\Entity\Custom\LlmScraperChatGptGetHtmlResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperChatGptGetHtmlResultsByIdEntityMain {
		return parent::get();
	}
}
