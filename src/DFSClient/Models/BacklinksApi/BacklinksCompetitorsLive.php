<?php

namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\BacklinksCompetitorsLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class BacklinksCompetitorsLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'backlinks/competitors/live';
    protected $resultShouldBeTransformedToArray = true;
    protected $jsonContainVariadicType = true;

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
     * @param bool $mainDomain
     * @return $this
     */
    public function setMainDomain(bool $mainDomain)
    {
        $this->payload['main_domain'] = $mainDomain;

        return $this;
    }

	/**
	 * @param bool $excludeLargeDomains
	 * @return $this
	 */
	public function setExcludeLargeDomains(bool $excludeLargeDomains)
	{
		$this->payload['exclude_large_domains'] = $excludeLargeDomains;

		return $this;
	}

	/**
	 * @param bool $excludeInternalBackLinks
	 * @return $this
	 */
	public function setExcludeInternalBackLinks(bool $excludeInternalBackLinks)
	{
		$this->payload['exclude_internal_backlinks'] = $excludeInternalBackLinks;
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

    /**
     * @return BacklinksCompetitorsLiveEntityMain
     */
    public function get(): BacklinksCompetitorsLiveEntityMain
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
