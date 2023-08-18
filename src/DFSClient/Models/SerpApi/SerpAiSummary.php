<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Models\AbstractModel;

class SerpAiSummary extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/ai_summary';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $taskId
     * @return $this
     */
    public function setTaskId (string $taskId)
    {
        $this->payload['task_id'] = $taskId;
        return $this;
    }

	/**
	 * @param string $prompt
	 * @return $this
	 */
	public function setPrompt(string $prompt)
	{
		$this->payload['prompt'] = $prompt;
		return $this;
	}

	/**
	 * @param bool $include_links
	 * @return $this
	 */
	public function setIncludeLinks(bool $include_links)
	{
		$this->payload['include_links'] = $include_links;
		return $this;
	}

	/**
	 * @param bool $fetch_content
	 * @return $this
	 */
	public function setFetchContent(bool $fetch_content)
	{
		$this->payload['fetch_content'] = $fetch_content;
		return $this;
	}

	/**
	 * @param bool suport_extra
	 * @return $this
	 */
	public function setSuportExtra(bool $suport_extra)
	{
		$this->payload['suport_extra'] = $suport_extra;
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
	 * @return \DFSClientV3\Entity\Custom\SerpAiSummaryEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\SerpAiSummaryEntityMain
	{
		return parent::get();
	}

}
