<?php

namespace DFSClientV3\Models\DataForSeoLabsApi\Google;

use DFSClientV3\Entity\Custom\GoogleDomainMetricsByCategoriesLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleDomainMetricsByCategoriesLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/google/domain_metrics_by_categories/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $jsonContainVariadicType = false;

    protected $useNewMapper = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleDomainMetricsByCategoriesLiveEntityMain
     */
    #[\Override]
    public function get(): GoogleDomainMetricsByCategoriesLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $categoryCodes
     *
     * @return $this
     */
    public function setCategoryCodes(array $categoryCodes)
    {
        $this->payload['category_codes'] = $categoryCodes;

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
     * @param string $languageCode
     *
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

    /**
     * @param string $firstDate
     *
     * @return $this
     */
    public function setFirstDate(string $firstDate)
    {
        $this->payload['first_date'] = $firstDate;

        return $this;
    }

    /**
     * @param string $secondDate
     *
     * @return $this
     */
    public function setSecondDate(string $secondDate)
    {
        $this->payload['second_date'] = $secondDate;

        return $this;
    }

    /**
     * @param int $topCategoriesCount
     *
     * @return $this
     */
    public function setTopCategoriesCount(int $topCategoriesCount)
    {
        $this->payload['top_categories_count'] = $topCategoriesCount;

        return $this;
    }

    /**
     * @param array $itemTypes
     *
     * @return $this
     */
    public function setItemTypes(array $itemTypes)
    {
        $this->payload['item_types'] = $itemTypes;

        return $this;
    }

    /**
     * @param bool $includeSubdomains
     *
     * @return $this
     */
    public function setIncludeSubdomains(bool $includeSubdomains)
    {
        $this->payload['include_subdomains'] = $includeSubdomains;

        return $this;
    }

    /**
     * @param int $etvMin
     *
     * @return $this
     */
    public function setEtvMin(int $etvMin)
    {
        $this->payload['etv_min'] = $etvMin;

        return $this;
    }

    /**
     * @param int $etvMax
     *
     * @return $this
     */
    public function setEtvMax(int $etvMax)
    {
        $this->payload['etv_max'] = $etvMax;

        return $this;
    }

    /**
     * @param bool $correlate
     *
     * @return $this
     */
    public function setCorrelate(bool $correlate)
    {
        $this->payload['correlate'] = $correlate;

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
     * @param string $tag
     *
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }

    #[\Override]
    protected function initCustomFunctionForPaths(): array
    {
        return [
            'tasks->(:number)->result->(:number)->items->(:number)->metrics_history' => fn ($key, $value) => json_decode(json_encode($value), true),
        ];
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
