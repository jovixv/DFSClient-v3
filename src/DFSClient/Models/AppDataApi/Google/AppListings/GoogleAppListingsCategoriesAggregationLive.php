<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppListings;

use DFSClientV3\Entity\Custom\GoogleAppListingsCategoriesAggregationLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppListingsCategoriesAggregationLive extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'app_data/apple/app_listings/categories_aggregation/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $jsonContainVariadicType = false;
	protected $useNewMapper = true;

	/**
	 * @param string $title
	 * @return $this
	 */
	public function setTitle(string $title) {
		$this->payload['title'] = $title;
		return $this;
	}

	/**
	 * @param string $description
	 * @return $this
	 */
	public function setDescription(string $description) {
		$this->payload['description'] = $description;
		return $this;
	}

	/**
	 * @param array $categories
	 * @return $this
	 */
	public function setCategories(array $categories) {
		$this->payload['categories'] = $categories;
		return $this;
	}

	/**
	 * @param array $initialDatasetFilters
	 * @return $this
	 */
	public function setInitialDatasetFilters(array $initialDatasetFilters) {
		$this->payload['initial_dataset_filters'] = $initialDatasetFilters;
		return $this;
	}

	/**
	 * @param int $internalListLimit
	 * @return $this
	 */
	public function setInternalListLimit(int $internalListLimit) {
		$this->payload['internal_list_limit'] = $internalListLimit;
		return $this;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function setLimit(int $limit) {
		$this->payload['limit'] = $limit;
		return $this;
	}

	/**
	 * @param string $offsetToken
	 * @return $this
	 */
	public function setOffsetToken(string $offsetToken) {
		$this->payload['offset_token'] = $offsetToken;
		return $this;
	}

	/**
	 * @param string $tag
	 * @return $this
	 */
	public function setTag(string $tag) {
		$this->payload['tag'] = $tag;
		return $this;
	}

	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleAppListingsCategoriesAggregationLiveEntityMain
	 */
	public function get(): GoogleAppListingsCategoriesAggregationLiveEntityMain {
		return parent::get();
	}

}
