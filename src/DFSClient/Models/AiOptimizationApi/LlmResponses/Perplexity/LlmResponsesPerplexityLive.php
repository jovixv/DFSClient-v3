<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmResponses\Perplexity;

use DFSClientV3\Models\AbstractModel;

class LlmResponsesPerplexityLive extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/perplexity/llm_responses/live';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmResponsesPerplexityLiveEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmResponsesPerplexityLiveEntityMain {
		return parent::get();
	}

	/**
	 * @param string $user_prompt
	 * @return $this
	 */
	public function setUserPrompt(string $user_prompt) {
		$this->payload['user_prompt'] = $user_prompt;
		return $this;
	}

	/**
	 * @param string $model_name
	 * @return $this
	 */
	public function setModelName(string $model_name) {
		$this->payload['model_name'] = $model_name;
		return $this;
	}

	/**
	 * @param int $max_output_tokens
	 * @return $this
	 */
	public function setMaxOutputTokens(int $max_output_tokens) {
		$this->payload['max_output_tokens'] = $max_output_tokens;
		return $this;
	}

	/**
	 * @param string $system_message
	 * @return $this
	 */
	public function setSystemMessage(string $system_message) {
		$this->payload['system_message'] = $system_message;
		return $this;
	}

	/**
	 * @param array $message_chain
	 * @return $this
	 */
	public function setMessageChain(array $message_chain) {
		$this->payload['message_chain'] = $message_chain;
		return $this;
	}

	/**
	 * @param float $temperature
	 * @return $this
	 */
	public function setTemperature(float $temperature) {
		$this->payload['temperature'] = $temperature;
		return $this;
	}

	/**
	 * @param float $top_p
	 * @return $this
	 */
	public function setTopP(float $top_p) {
		$this->payload['top_p'] = $top_p;
		return $this;
	}

	/**
	 * @param string $web_search_country_iso_code
	 * @return $this
	 */
	public function setWebSearchCountryIsoCode(string $web_search_country_iso_code) {
		$this->payload['web_search_country_iso_code'] = $web_search_country_iso_code;
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
