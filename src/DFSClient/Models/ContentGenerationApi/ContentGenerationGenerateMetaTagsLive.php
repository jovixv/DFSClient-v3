<?php

namespace DFSClientV3\Models\ContentGenerationApi;

use DFSClientV3\Entity\Custom\ContentGenerationGenerateMetaTagsLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentGenerationGenerateMetaTagsLive extends AbstractModel {

	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'content_generation/generate_meta_tags/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $jsonContainVariadicType = false;
	protected $useNewMapper = true;

	/**
	 * @param string $text
	 * @return $this
	 */
	public function setText(string $text) {
		$this->payload['text'] = $text;

		return $this;
	}

	/**
	 * @param float $creativity_index
	 * @return $this
	 */
	public function setCreativityIndex(float $creativity_index) {
		$this->payload['creativity_index'] = $creativity_index;

		return $this;
	}

	/**
	 * @return ContentGenerationGenerateMetaTagsLiveEntityMain
	 */
	public function get(): ContentGenerationGenerateMetaTagsLiveEntityMain
	{
		return parent::get(); // TODO: Change the autogenerated stub
	}
}
