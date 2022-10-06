<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Models\AbstractModel;

class TechnologiesTechnologies extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'domain_analytics/technologies/technologies';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\TechnologiesTechnologiesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\TechnologiesTechnologiesEntityMain {
		return parent::get();
	}
}
