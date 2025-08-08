<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperChatGptCompletedTasks extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_scraper/tasks_ready';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperChatGptCompletedTasksEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperChatGptCompletedTasksEntityMain {
		return parent::get();
	}
}
