<?php

namespace DFSClientV3\Models\KeywordsDataApi\Search_Volume_History;

use DFSClientV3\Entity\Custom\SearchVolumeHistoryLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class SearchVolumeHistoryLive extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/search_volume_history/live';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

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
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod(string $period)
    {
        $this->payload['period'] = $period;

        return $this;
    }

    /**
     * @param array $device
     *
     * @return $this
     */
    public function setDevice(array $device)
    {
        $this->payload['device'] = $device;

        return $this;
    }

    /**
     * @param string $date_from
     *
     * @return $this
     */
    public function setDateFrom(string $date_from)
    {
        $this->payload['date_from'] = $date_from;

        return $this;
    }

    /**
     * @param string $date_to
     *
     * @return $this
     */
    public function setDateTo(string $date_to)
    {
        $this->payload['date_to'] = $date_to;

        return $this;
    }

    /**
     * 'bing' only.
     *
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @return SearchVolumeHistoryLiveEntityMain
     */
    #[\Override]
    public function get(): SearchVolumeHistoryLiveEntityMain
    {
        return parent::get();
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
