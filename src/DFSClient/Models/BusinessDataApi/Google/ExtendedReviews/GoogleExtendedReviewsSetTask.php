<?php

namespace DFSClientV3\Models\BusinessDataApi\Google\ExtendedReviews;

use DFSClientV3\Models\AbstractModel;

class GoogleExtendedReviewsSetTask extends AbstractModel
{
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'business_data/google/extended_reviews/task_post';
    protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\GoogleExtendedReviewsSetTaskEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\GoogleExtendedReviewsSetTaskEntityMain
	{
		return parent::get();
	}

	/**
	 * @param string $keyword
	 * @return $this
	 */
	public function setKeyword(string $keyword)
	{
		$this->payload['keyword'] = $keyword;
		return $this;
	}

	/**
	 * @param string $cid
	 * @return $this
	 */
	public function setCid(string $cid)
	{
		$this->payload['cid'] = $cid;
		return $this;
	}

	/**
	 * @param string $placeId
	 * @return $this
	 */
	public function setPlaceId(string $placeId)
	{
		$this->payload['place_id'] = $placeId;
		return $this;
	}

	/**
	 * @param int $priority
	 * @return $this
	 */
	public function setPriority(int $priority)
	{
		$this->payload['priority'] = $priority;
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
	 * @param string $locationCoordinate
	 * @return $this
	 */
	public function setLocationCoordinate(string $locationCoordinate)
	{
		$this->payload['location_coordinate'] = $locationCoordinate;
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
	 * @param string $langCode
	 * @return $this
	 */
	public function setLanguageCode(string $languageCode)
	{
		$this->payload['language_code'] = $languageCode;

		return $this;
	}

	/**
	 * @param int $depth
	 * @return $this
	 */
	public function setDepth(int $depth)
	{
		$this->payload['depth'] = $depth;
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

	/**
	 * @param string $postbackUrl
	 * @return $this
	 */
	public function setPostbackUrl(string $postbackUrl)
	{
		$this->payload['postback_url'] = $postbackUrl;
		return $this;
	}

	/**
	 * @param string $pingbackUrl
	 * @return $this
	 */
	public function setPingbackUrl(string $pingbackUrl)
	{
		$this->payload['pingback_url'] = $pingbackUrl;
		return $this;
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
