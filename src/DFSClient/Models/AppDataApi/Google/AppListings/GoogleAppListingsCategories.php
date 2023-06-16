<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppListings;

use DFSClientV3\Models\AbstractModel;

class GoogleAppListingsCategories extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'app_data/google/app_listings/categories';
	protected $resultShouldBeTransformedToArray = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleAppListingsCategoriesEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleAppListingsCategoriesEntityMain
	{
		return parent::get();
	}
}
