<?php

namespace DFSClientV3\Models\AiOptimizationApi\ChatGpt\LlmScraper;

use DFSClientV3\Models\AbstractModel;

class LlmScraperChatGptLiveAdvanced extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/chat_gpt/llm_scraper/live/advanced';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmScraperChatGptLiveAdvancedEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmScraperChatGptLiveAdvancedEntityMain {
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
	 * @param string $locationCoordinate
	 * @return $this
	 */
	public function setLocationCoordinate(string $locationCoordinate) {
		$this->payload['location_coordinate'] = $locationCoordinate;
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
	 * @param boolean $forceWebSearch
	 * @return $this
	 */
	public function setForceWebSearch(bool $forceWebSearch) {
		$this->payload['force_web_search'] = $forceWebSearch;
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
