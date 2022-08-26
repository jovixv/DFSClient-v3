<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\AppData;

use DFSClientV3\Models\AbstractModel;

class GoogleBulkAppMetricsLive extends AbstractModel {

	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'dataforseo_labs/google/bulk_app_metrics/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleBulkAppMetricsLiveEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleBulkAppMetricsLiveEntityMain
	{
		return parent::get();
	}

	/**
	 * @param array $appIds
	 * @return $this
	 */
	public function setAppIds(array $appIds) {
		$this->payload['app_ids'] = $appIds;

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
	 * @param string $tag
	 * @return $this
	 */
	public function setTag(string $tag)
	{
		$this->payload['tag'] = $tag;
		return $this;
	}

	protected function initCustomFunctionForPaths(): array
	{
		return [
			'tasks->(:number)->data->app_ids' => function($key, $value){return (array)$value;}
		];
	}

	/**
	 * @param array $modelPool
	 * @return array
	 * @throws \Exception
	 */
	public static function getAfterMerge(array $modelPool)
	{
		return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
	}
}