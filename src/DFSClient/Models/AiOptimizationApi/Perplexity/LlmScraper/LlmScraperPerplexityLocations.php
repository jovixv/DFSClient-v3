<?php

namespace DFSClientV3\Models\AiOptimizationApi\Perplexity\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperPerplexityLocations extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/perplexity/llm_scraper/locations';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperPerplexityLocationsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperPerplexityLocationsEntityMain {
		return parent::get();
	}
}
