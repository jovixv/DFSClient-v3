<?php

namespace DFSClientV3\Models\AiOptimizationApi\LlmMentions;

use DFSClientV3\Models\AbstractModel;

class LlmMentionsLocationsAndLanguages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/llm_mentions/locations_and_languages';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LlmMentionsLocationsAndLanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LlmMentionsLocationsAndLanguagesEntityMain {
		return parent::get();
	}
}
