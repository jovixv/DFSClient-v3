<?php

namespace DFSClientV3\Models\AiOptimizationApi\Perplexity\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperPerplexityLanguages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/perplexity/llm_scraper/languages';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperPerplexityLanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperPerplexityLanguagesEntityMain {
		return parent::get();
	}
}
