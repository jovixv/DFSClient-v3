<?php

namespace DFSClientV3\Models\AiOptimizationApi\Gemini\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperGeminiSetTask extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/gemini/llm_scraper/task_post';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperGeminiSetTaskEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperGeminiSetTaskEntityMain {
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
	 * @param string $priority
	 * @return $this
	 */
	public function setPriority(string $priority) {
		$this->payload['priority'] = $priority;
		return $this;
	}

	/**
	 * @param string $postbackUrl
	 * @return $this
	 */
	public function setPostbackUrl(string $postbackUrl) {
		$this->payload['postback_url'] = $postbackUrl;
		return $this;
	}

	/**
	 * @param string $postbackData
	 * @return $this
	 */
	public function setPostbackData(string $postbackData) {
		$this->payload['postback_data'] = $postbackData;
		return $this;
	}

	/**
	 * @param string $pingbackUrl
	 * @return $this
	 */
	public function setPingbackUrl(string $pingbackUrl) {
		$this->payload['pingback_url'] = $pingbackUrl;
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
