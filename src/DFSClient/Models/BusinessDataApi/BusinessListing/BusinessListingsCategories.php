<?php

namespace DFSClientV3\Models\BusinessDataApi\BusinessListing;

use DFSClientV3\Entity\Custom\BusinessListingsCategoriesEntityMain;
use DFSClientV3\Models\AbstractModel;

class BusinessListingsCategories extends AbstractModel {
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'business_data/business_listings/categories';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return BusinessListingsCategoriesEntityMain
	 */
	public function get(): BusinessListingsCategoriesEntityMain {
		return parent::get();
	}
}
