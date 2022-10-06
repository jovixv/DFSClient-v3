<?php

namespace DFSClientV3\Models\DomainAnalyticsApi\Technologies;

use DFSClientV3\Models\AbstractModel;

class TechnologiesLocations extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'domain_analytics/technologies/locations';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\TechnologiesLocationsEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\TechnologiesLocationsEntityMain {
		return parent::get();
	}
}
