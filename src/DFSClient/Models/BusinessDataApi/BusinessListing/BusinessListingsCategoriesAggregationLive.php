<?php

namespace DFSClientV3\Models\BusinessDataApi\BusinessListing;

use DFSClientV3\Entity\Custom\BusinessListingsCategoriesAggregationLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class BusinessListingsCategoriesAggregationLive extends AbstractModel {
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'business_data/business_listings/categories_aggregation/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $jsonContainVariadicType = false;
	protected $pathsToVariadicTypesAndValue = ['tasks->(:number)->result->(:number)->items->(:number)' => 'type'];
	protected $useNewMapper = true;

	/**
	 * @param array $categories
	 * @return $this
	 */
	public function setCategories(array $categories) {
		$this->payload['categories'] = $categories;
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
	 * @param string $title
	 * @return $this
	 */
	public function setTitle(string $title) {
		$this->payload['title'] = $title;
		return $this;
	}

	/**
	 * @param bool $is_claimed
	 * @return $this
	 */
	public function setIsClaimed(bool $is_claimed) {
		$this->payload['is_claimed'] = $is_claimed;
		return $this;
	}

	/**
	 * @param string $location_coordinate
	 * @return $this
	 */
	public function setLocationCoordinate(string $location_coordinate) {
		$this->payload['location_coordinate'] = $location_coordinate;
		return $this;
	}

	/**
	 * @param array $initial_dataset_filters
	 * @return $this
	 */
	public function setInitialDatasetFilters(array $initial_dataset_filters) {
		$this->payload['initial_dataset_filters'] = $initial_dataset_filters;
		return $this;
	}

	/**
	 * @param int $internal_list_limit
	 * @return $this
	 */
	public function setInternalListLimit(int $internal_list_limit) {
		$this->payload['internal_list_limit'] = $internal_list_limit;
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
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset(int $offset) {
		$this->payload['offset'] = $offset;
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

	protected function initCustomFunctionForPaths(): array {
		return [
			'tasks->(:number)->result->(:number)->items->(:number)->aggregation->top_categories' => function($key, $value) {
				return (array)$value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->aggregation->top_countries' => function($key, $value) {
				return (array)$value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->aggregation->top_attributes' => function($key, $value) {
				return (array)$value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->aggregation->top_place_topics' => function($key, $value) {
				return (array)$value;
			},
		];
	}

	/**
	 * @return BusinessListingsCategoriesAggregationLiveEntityMain
	 */
	public function get(): BusinessListingsCategoriesAggregationLiveEntityMain {
		return parent::get();
	}

	/**
	 * @param array $modelPool
	 * @return array
	 * @throws \Exception
	 */
	public static function getAfterMerge(array $modelPool) {
		return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
	}

}
