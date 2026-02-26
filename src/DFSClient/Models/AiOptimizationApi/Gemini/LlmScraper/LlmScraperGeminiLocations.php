<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiLocations extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/locations';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiLocationsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiLocationsEntityMain {
		return parent::get();
	}
}
