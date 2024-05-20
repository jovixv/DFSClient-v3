<?php

namespace DFSClientV3\Models\BusinessDataApi\BusinessListing;

use DFSClientV3\Entity\Custom\BusinessListingsAvailableFiltersEntityMain;
use DFSClientV3\Models\AbstractModel;

class BusinessListingsAvailableFilters extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'business_data/business_listings/available_filters';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return BusinessListingsAvailableFiltersEntityMain
	 */
	public function get(): BusinessListingsAvailableFiltersEntityMain {
		return parent::get();
	}
}
