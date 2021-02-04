<?php


namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class OnPageGetDuplicateContent extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'on_page/duplicate_content';
    protected $resultShouldBeTransformedToArray = true;
    protected $jsonContainVariadicType = true;
    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items->(:number)->pages->(:number)->page->(:number)' => 'resource_type'
    ];

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->payload['url'] = $url;
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
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
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
     * @param array $filter
     * @return $this
     */
    public function setFilter(array $filter)
    {
        $this->payload['filters'] = $filter;
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\OnPageGetDuplicateContentEntityMain;
     */
    public function get()
    {
        return parent::get();
    }

}
