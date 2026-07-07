<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmMentions;

use DFSClientV3\Models\AbstractModel;

class LlmMentionsSearchMentionsLive extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/llm_mentions/search_mentions/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	public function setTarget(array $target) {
		$this->payload['target'] = $target;
		return $this;
	}

	public function setLocationName(string $locationName) {
		$this->payload['location_name'] = $locationName;
		return $this;
	}

	public function setLanguageName(string $languageName) {
		$this->payload['language_name'] = $languageName;
		return $this;
	}

	public function setLanguageCode(string $languageCode) {
		$this->payload['language_code'] = $languageCode;
		return $this;
	}

	public function setLocationCode(int $locationCode) {
		$this->payload['location_code'] = $locationCode;
		return $this;
	}

	public function setPlatform(string $platform) {
		$this->payload['platform'] = $platform;
		return $this;
	}

	public function setFilters(array $filters) {
		$this->payload['filters'] = $filters;
		return $this;
	}

	public function setOrderBy(array $orderBy) {
		$this->payload['order_by'] = $orderBy;
		return $this;
	}

	public function setLimit(int $limit) {
		$this->payload['limit'] = $limit;
		return $this;
	}

	public function setOffset(int $offset) {
		$this->payload['offset'] = $offset;
		return $this;
	}

	public function setSearchAfterToken(string $searchAfterToken) {
		$this->payload['search_after_token'] = $searchAfterToken;
		return $this;
	}

	public function setTag(string $tag) {
		$this->payload['tag'] = $tag;
		return $this;
	}

	public static function getAfterMerge(array $modelPool) {
		return parent::getAfterMerge($modelPool);
	}

	public function get(): \DFSClientV3\Entity\Custom\LlmMentionsSearchMentionsLiveEntityMain {
		return parent::get();
	}
}
