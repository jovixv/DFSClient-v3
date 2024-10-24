<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Category;

use DFSClientV3\Entity\Custom\KeywordsForCategorySetTaskEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordsForCategorySetTask extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_category/task_post';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return KeywordsForCategorySetTaskEntityMain
     */
    #[\Override]
    public function get(): KeywordsForCategorySetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param int $categoryCode
     *
     * @return $this
     */
    public function setCategoryCode(int $categoryCode)
    {
        $this->payload['category_code'] = $categoryCode;

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
     * @param bool $searchPartners
     *
     * @return $this
     */
    public function setSearchPartners(bool $searchPartners)
    {
        $this->payload['search_partners'] = $searchPartners;

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
     * @param array $keywordsNegative
     *
     * @return $this
     */
    public function setKeywordsNegative(array $keywordsNegative)
    {
        $this->payload['keywords_negative'] = $keywordsNegative;

        return $this;
    }

    /**
     * For 'bing' se only!
     *
     * @param string $device
     * @param string $se
     *
     * @return $this
     */
    public function setDevice(string $device, string $se)
    {
        if ($se === 'bing') {
            $this->payload['device'] = $device;
        }

        return $this;
    }

    /**
     * For 'bing' se only!
     *
     * @param string $date_from
     * @param string $se
     *
     * @return $this
     */
    public function setDateFrom(string $date_from, string $se)
    {
        if ($se === 'bing') {
            $this->payload['date_from'] = $date_from;
        }

        return $this;
    }

    /**
     * For 'bing' se only!
     *
     * @param string $date_to
     * @param string $se
     *
     * @return $this
     */
    public function setDateTo(string $date_to, string $se)
    {
        if ($se === 'bing') {
            $this->payload['date_to'] = $date_to;
        }

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
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

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
