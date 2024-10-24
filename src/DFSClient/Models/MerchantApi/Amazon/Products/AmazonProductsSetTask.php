<?php

namespace DFSClientV3\Models\MerchantApi\Amazon\Products;

use DFSClientV3\Entity\Custom\AmazonProductsSetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class AmazonProductsSetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'merchant/amazon/products/task_post';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\AmazonProductsSetTaskEntityMain
     */
    #[\Override]
    public function get(): AmazonProductsSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->payload['keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->payload['url'] = $url;

        return $this;
    }

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority(int $priority)
    {
        $this->payload['priority'] = $priority;

        return $this;
    }

    /**
     * @param string $seDomain
     *
     * @return $this
     */
    public function setSeDomain(string $seDomain)
    {
        $this->payload['se_domain'] = $seDomain;

        return $this;
    }

    /**
     * @param int $depth
     *
     * @return $this
     */
    public function setDepth(int $depth)
    {
        $this->payload['depth'] = $depth;

        return $this;
    }

    /**
     * @param string $searchParam
     *
     * @return $this
     */
    public function setSearchParam(string $searchParam)
    {
        $this->payload['search_param'] = $searchParam;

        return $this;
    }

    /**
     * @param string $department
     *
     * @return $this
     */
    public function setDepartment(string $department)
    {
        $this->payload['department'] = $department;

        return $this;
    }

    /**
     * @param int $priceMin
     *
     * @return $this
     */
    public function setPriceMin(int $priceMin)
    {
        $this->payload['price_min'] = $priceMin;

        return $this;
    }

    /**
     * @param int $priceMin
     *
     * @return $this
     */
    public function setPriceMax(int $priceMax)
    {
        $this->payload['price_max'] = $priceMax;

        return $this;
    }

    /**
     * @param string $sortBy
     *
     * @return $this
     */
    public function setSortBy(string $sortBy)
    {
        $this->payload['sort_by'] = $sortBy;

        return $this;
    }

    /**
     * @param string $locationName
     *
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     *
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;

        return $this;
    }

    /**
     * @param string $locationCoordinate
     *
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;

        return $this;
    }

    /**
     * @param string $languageName
     *
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;

        return $this;
    }

    /**
     * @param string $langCode
     *
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

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
     * @param string $postbackUrl
     *
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;

        return $this;
    }

    /**
     * @param string $pingbackUrl
     *
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;

        return $this;
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return array
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
