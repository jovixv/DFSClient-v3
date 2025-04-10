<?php

namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BacklinksDomainPagesSummaryLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class BacklinksDomainPagesSummaryLive extends AbstractModel
{
	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'backlinks/domain_pages_summary/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $jsonContainVariadicType = false;
	protected $useNewMapper = true;

	/**
	 * @param string $target
	 * @return $this
	 */
	public function setTarget(string $target)
	{
		$this->payload['target'] = $target;

		return $this;
	}

	/**
	 * @param array $orderBy
	 * @return $this
	 */
	public function setOrderBy(array $orderBy)
	{
		$this->payload['order_by'] = $orderBy;

		return $this;
	}

	/**
	 * @param int $limit
	 * @return $this
	 */
	public function setLimit(int $limit)
	{
		$this->payload['limit'] = $limit;

		return $this;
	}

	/**
	 * @param int $offset
	 * @return $this
	 */
	public function setOffset(int $offset)
	{
		$this->payload['offset'] = $offset;

		return $this;
	}

	/**
	 * @param array $filters
	 * @return $this
	 */
	public function setFilters(array $filters)
	{
		$this->payload['filters'] = $filters;

		return $this;
	}

	/**
	 * @param int $internalListLimit
	 * @return $this
	 */
	public function setInternalListLimit(int $internalListLimit)
	{
		$this->payload['internal_list_limit'] = $internalListLimit;

		return $this;
	}

	/**
	 * @param string $backlinksStatusType
	 * @return $this
	 */
	public function setBacklinksStatusType(string $backlinksStatusType)
	{
		$this->payload['backlinks_status_type'] = $backlinksStatusType;

		return $this;
	}

	/**
	 * @param bool $includeSubdomains
	 * @return $this
	 */
	public function setIncludeSubdomains(bool $includeSubdomains)
	{
		$this->payload['include_subdomains'] = $includeSubdomains;

		return $this;
	}

	/**
	 * @param bool $excludeInternalBacklinks
	 * @return $this
	 */
	public function setExcludeInternalBacklinks(bool $excludeInternalBacklinks)
	{
		$this->payload['exclude_internal_backlinks'] = $excludeInternalBacklinks;

		return $this;
	}

	/**
	 * @param array $backlinksFilters
	 * @return $this
	 */
	public function setBacklinksFilters(array $backlinksFilters)
	{
		$this->payload['backlinks_filters'] = $backlinksFilters;

		return $this;
	}

	/**
	 * @param bool $includeIndirectLinks
	 * @return $this
	 */
	public function setIncludeIndirectLinks(bool $includeIndirectLinks)
	{
		$this->payload['include_indirect_links'] = $includeIndirectLinks;

		return $this;
	}

	/**
	 * @param string $rankScale
	 * @return $this
	 */
	public function setRankScale(string $rankScale)
	{
		$this->payload['rank_scale'] = $rankScale;
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
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_tld' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_types' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_attributes' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_platform_types' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_semantic_locations' => function($key, $value){
				return (array) $value;
			},
			'tasks->(:number)->result->(:number)->items->(:number)->referring_links_countries' => function($key, $value){
				return (array) $value;
			},
		];
	}

	/**
	 * @return BacklinksDomainPagesSummaryLiveEntityMain
	 */
	public function get(): BacklinksDomainPagesSummaryLiveEntityMain
	{
		return parent::get();
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
