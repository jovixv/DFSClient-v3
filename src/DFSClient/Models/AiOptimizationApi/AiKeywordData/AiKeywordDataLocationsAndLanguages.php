<?php

namespace DFSClientV3\Models\AiOptimizationApi\AiKeywordData;

use DFSClientV3\Models\AbstractModel;

class AiKeywordDataLocationsAndLanguages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'ai_optimization/ai_keyword_data/locations_and_languages';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\AiKeywordDataLocationsAndLanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AiKeywordDataLocationsAndLanguagesEntityMain {
		return parent::get();
	}
}
