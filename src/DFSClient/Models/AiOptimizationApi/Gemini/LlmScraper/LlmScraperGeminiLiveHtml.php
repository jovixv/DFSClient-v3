<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiLiveHtml extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/live/html';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiLiveHtmlEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiLiveHtmlEntityMain {
		return parent::get();
	}

	/**
	 * @param string $keyword
	 * @return $this
	 */
	public function setKeyword(string $keyword) {
		$this->payload['keyword'] = $keyword;
		return $this;
	}

	/**
	 * @param string $locationName
	 * @return $this
	 */
	public function setLocationName(string $locationName) {
		$this->payload['location_name'] = $locationName;
		return $this;
	}

	/**
	 * @param int $locationCode
	 * @return $this
	 */
	public function setLocationCode(int $locationCode) {
		$this->payload['location_code'] = $locationCode;
		return $this;
	}

	/**
	 * @param string $languageName
	 * @return $this
	 */
	public function setLanguageName(string $languageName) {
		$this->payload['language_name'] = $languageName;
		return $this;
	}

	/**
	 * @param string $languageCode
	 * @return $this
	 */
	public function setLanguageCode(string $languageCode) {
		$this->payload['language_code'] = $languageCode;
		return $this;
	}

	/**
	 * @param boolean $expandCitations
	 * @return $this
	 */
	public function setExpandCitations(bool $expandCitations) {
		$this->payload['expand_citations'] = $expandCitations;
		return $this;
	}

	/**
	 * @param string $tag
	 * @return $this
	 */
	public function setTag(string $tag) {
		$this->payload['tag'] = $tag;
		return $this;
	}
}
