<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keywords;

use DFSClientV3\Entity\Custom\KeywordsForKeywordLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordsForKeywordLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_keywords/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @return KeywordsForKeywordLiveEntityMain
     */
    #[\Override]
    public function get(): KeywordsForKeywordLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keywords
     *
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

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
     * @param bool $closelyVariants
     *
     * @return $this
     */
    public function setCloselyVariants(bool $closelyVariants)
    {
        $this->payload['closely_variants'] = $closelyVariants;

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
     * @param integer $code
     * @param string  $se
     *
     * @return $this
     */
    public function setCategoryCode(int $category_code, string $se)
    {
        if ($se === 'bing') {
            $this->payload['category_code'] = $category_code;
        }

        return $this;
    }

    /**
     * Can't use for 'google' se!
     *
     * @param string $date_from
     * @param string $se
     *
     * @return $this
     */
    public function setDateFrom(string $date_from, string $se)
    {
        if ($se === 'bing' || $se === 'google_ads') {
            $this->payload['date_from'] = $date_from;
        }

        return $this;
    }

    /**
     * Can't use for 'google' se!
     *
     * @param string $date_to
     * @param string $se
     *
     * @return $this
     */
    public function setDateTo(string $date_to, string $se)
    {
        if ($se === 'bing' || $se === 'google_ads') {
            $this->payload['date_to'] = $date_to;
        }

        return $this;
    }

    /**
     * For 'google_ads' se only!
     *
     * @param bool   $include_adult_keywords
     * @param string $se
     *
     * @return $this
     */
    public function setIncludeAdultKeywords(bool $include_adult_keywords, string $se)
    {
        if ($se === 'google_ads') {
            $this->payload['include_adult_keywords'] = $include_adult_keywords;
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

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }
}
