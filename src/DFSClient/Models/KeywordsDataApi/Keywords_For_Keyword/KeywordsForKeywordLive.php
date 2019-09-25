<?php

namespace DFSClient\Models\KeywordsDataApi\Keywords_For_Keyword;

use DFSClient\Models\AbstractModel;

class KeywordsForKeywordLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/live/keywords_for_keywords';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @Required
     *
     * @param string $langCode
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

        return $this;
    }

    /**
     * @param array $keys
     */
    public function setKeys(array $keys)
    {
        $this->payload['keys'] = $keys;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClient\Entity\Custom\AdsTrafficByPlatformsLiveEntityMain
     */
    public function get(): \DFSClient\Entity\Custom\KeywordsForKeywordLiveEntityMain
    {
        return parent::get();
    }

}
