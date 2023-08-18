<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppListings;

use DFSClientV3\Models\AbstractModel;

class AppleAppListingsCategories extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'app_data/apple/app_listings/categories';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\AppleAppListingsCategoriesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\AppleAppListingsCategoriesEntityMain
	{
		return parent::get();
	}
}
