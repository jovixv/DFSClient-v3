<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppListings;

use DFSClientV3\Entity\Custom\AppleAppListingsAvailableFiltersEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppListingsAvailableFilters extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'app_data/apple/app_listings/available_filters';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return AppleAppListingsAvailableFiltersEntityMain
	 */
	public function get(): AppleAppListingsAvailableFiltersEntityMain {
		return parent::get();
	}
}
