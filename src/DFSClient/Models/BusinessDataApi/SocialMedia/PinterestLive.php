<?php

namespace DFSClientV3\Models\BusinessDataApi\SocialMedia;


use DFSClientV3\Models\AbstractModel;

class PinterestLive extends AbstractModel
{
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'business_data/social_media/pinterest/live';
	protected $resultShouldBeTransformedToArray = true;
    protected $useNewMapper = true;

	/**
	 * @return \DFSClientV3\Entity\Custom\PinterestLiveEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\PinterestLiveEntityMain
	{
		return parent::get();
	}

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
	 * @param string $tag
	 * @return $this
	 */
	public function setTag(string $tag)
	{
		$this->payload['tag'] = $tag;
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
