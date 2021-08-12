<?php


namespace DFSClientV3\Models\BacklinksApi;

use DFSClientV3\Entity\Custom\DictionaryEntity;
use DFSClientV3\Models\AbstractModel;

class BackLinksContentDuplicates extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'backlinks/content_duplicates/live';
    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = true;

    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items->(:number)' => 'type'
    ];

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
     * @param int $similarity
     * @return $this
     */
    public function setSimilarity(int $similarity)
    {
        $this->payload['similarity'] = $similarity;
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
     * @return int
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;
        return $offset;
    }

    /**
     * @param int $internalListLimits
     * @return $this
     */
    public function setInternalListLimit(int $internalListLimits)
    {
        $this->payload['internal_list_limit'] = $internalListLimits;
        return $this;
    }

    /**
     * @param string $backLinksStatusType
     * @return $this
     */
    public function setBackLinksStatusType(string $backLinksStatusType)
    {
        $this->payload['backlinks_status_type'] = $backLinksStatusType;
        return $this;
    }

    /**
     * @param array $filter
     * @return $this
     */
    public function setFilter(array $filter)
    {
        $this->payload['filter'] = $filter;
        return $this;
    }

    /**
     * @param array $filter
     * @return $this
     */
    public function setBackLinksFilters(array $filter)
    {
        $this->payload['backlinks_filters'] = $filter;
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
     * @param bool $includeSubdomains
     * @return $this
     */
    public function setIncludeSubdomains(bool $includeSubdomains)
    {
        $this->payload['include_subdomains'] = $includeSubdomains;
        return $this;
    }

}
