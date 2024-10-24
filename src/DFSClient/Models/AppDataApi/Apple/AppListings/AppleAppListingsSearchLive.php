<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppListings;

use DFSClientV3\Entity\Custom\AppleAppListingsSearchLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppListingsSearchLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'app_data/apple/app_listings/search/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = false;

    protected $useNewMapper = true;

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->payload['title'] = $title;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->payload['description'] = $description;

        return $this;
    }

    /**
     * @param array $categories
     *
     * @return $this
     */
    public function setCategories(array $categories)
    {
        $this->payload['categories'] = $categories;

        return $this;
    }

    /**
     * @param array $orderBy
     *
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

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
     * @param string $offsetToken
     *
     * @return $this
     */
    public function setOffsetToken(string $offsetToken)
    {
        $this->payload['offset_token'] = $offsetToken;

        return $this;
    }

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
     * @return AppleAppListingsSearchLiveEntityMain
     */
    #[\Override]
    public function get(): AppleAppListingsSearchLiveEntityMain
    {
        return parent::get();
    }
}
