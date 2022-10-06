<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Models\AbstractModel;

class Languages extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'domain_analytics/technologies/languages';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\LanguagesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\LanguagesEntityMain {
		return parent::get();
	}
}
