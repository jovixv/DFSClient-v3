<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Models\AbstractModel;

class GoogleHistoricalBulkTrafficEstimationLive extends AbstractModel
{
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'dataforseo_labs/google/historical_bulk_traffic_estimation/live';

	/**
	 * @param array $targets
	 * @return $this
	 */
	public function setTargets(array $targets)
	{
		$this->payload['targets'] = $targets;

		return $this;
	}

	/**
	 * @param string $locationName
	 * @return $this
	 */
	public function setLocationName(string $locationName)
	{
		$this->payload['location_name'] = $locationName;

		return $this;
	}

	/**
	 * @param int $locationCode
	 * @return $this
	 */
	public function setLocationCode(int $locationCode)
	{
		$this->payload['location_code'] = $locationCode;
		return $this;
	}

	/**
	 * @param string $languageName
	 * @return $this
	 */
	public function setLanguageName(string $languageName)
	{
		$this->payload['language_name'] = $languageName;
		return $this;
	}

	/**
	 * @param string $languageCode
	 * @return $this
	 */
	public function setLanguageCode(string $languageCode)
	{
		$this->payload['language_code'] = $languageCode;

		return $this;
	}

	/**
	 * @param array $itemTypes
	 * @return $this
	 */
	public function setItemTypes(array $itemTypes)
	{
		$this->payload['item_types'] = $itemTypes;

		return $this;
	}

	/**
	 * @param bool $ignoreSynonyms
	 * @return $this
	 */
	public function setIgnoreSynonyms(bool $ignoreSynonyms)
	{
		$this->payload['ignore_synonyms'] = $ignoreSynonyms;

		return $this;
	}

	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleHistoricalBulkTrafficEstimationLiveEntityMain
	{
		return parent::get();
	}

}
