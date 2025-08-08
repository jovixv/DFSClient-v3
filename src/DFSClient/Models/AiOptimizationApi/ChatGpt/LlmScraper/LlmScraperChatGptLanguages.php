<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperChatGptLanguages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_scraper/languages';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperChatGptLanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperChatGptLanguagesEntityMain {
		return parent::get();
	}
}
