<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiLanguages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/languages';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiLanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiLanguagesEntityMain {
		return parent::get();
	}
}
