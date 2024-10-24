<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageGetLinksEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageGetLinks extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'on_page/links';

    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = true;

    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items->(:number)' => 'type',
    ];

    protected $useNewMapper = true;

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->payload['id'] = $taskUUID;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setPageTO(string $pageTo)
    {
        $this->payload['page_to'] = $pageTo;

        return $this;
    }

    /**
     * @param string $pageFrom
     *
     * @return $this
     */
    public function setPageFrom(string $pageFrom)
    {
        $this->payload['page_from'] = $pageFrom;

        return $this;
    }

    /**
     * @param int $limit
     *
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->payload['limit'] = $limit;

        return $this;
    }

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
    public function setFilter(array $filter)
    {
        $this->payload['filters'] = $filter;

        return $this;
    }

    //    /**
    //     * @param array $orderBy
    //     * @return $this
    //     */
    //    public function setOrderBy(array $orderBy)
    //    {
    //        $this->payload['order_by'] = $orderBy;
    //        return $this;
    //    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }

    /**
     * @return OnPageGetLinksEntityMain
     */
    #[\Override]
    public function get(): OnPageGetLinksEntityMain
    {
        return parent::get();
    }
}
