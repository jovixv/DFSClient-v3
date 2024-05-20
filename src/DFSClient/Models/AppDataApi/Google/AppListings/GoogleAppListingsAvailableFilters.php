<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppListings;

use DFSClientV3\Entity\Custom\GoogleAppListingsAvailableFiltersEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppListingsAvailableFilters extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'app_data/google/app_listings/available_filters';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return GoogleAppListingsAvailableFiltersEntityMain
	 */
	public function get(): GoogleAppListingsAvailableFiltersEntityMain {
		return parent::get();
	}
}
