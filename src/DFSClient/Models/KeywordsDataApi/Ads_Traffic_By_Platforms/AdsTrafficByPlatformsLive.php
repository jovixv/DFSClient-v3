<?php

namespace DFSClientV3\Models\KeywordsDataApi\Ads_Traffic_By_Platforms;

use DFSClientV3\Models\AbstractModel;

class AdsTrafficByPlatformsLive extends AbstractModel
{

    protected $method = 'POST';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/live/ad_traffic_by_platforms';
    protected $resultShouldBeTransformedToArray = false;

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
     * @return \DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\AdsTrafficByPlatformsLiveEntityMain
    {
        return parent::get();
    }


}
