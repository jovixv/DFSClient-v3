<?php

namespace DFSClientV3\Models\AiOptimizationApi\Perplexity\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperPerplexityCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/perplexity/llm_scraper/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperPerplexityCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperPerplexityCompletedTasksEntityMain {
		return parent::get();
	}
}
