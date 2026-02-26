<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiCompletedTasksEntityMain {
		return parent::get();
	}
}
