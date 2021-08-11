<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Models\AbstractModel;

class SettingSerpTasks extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/{$seType}/task_post';
    protected $resultShouldBeTransformedToArray = true;

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
     * @param string $langCode
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

        return $this;
    }

    /**
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->payload['keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $priority
     * @return $this
     */
    public function setPriority(string $priority)
    {
        $this->payload['priority'] = $priority;

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
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $locationCoordinate
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $device
     * @return $this
     */
    public function setDevice(string $device)
    {
        $this->payload['device'] = $device;
        return $this;
    }

    /**
     * @param string $os
     * @return $this
     */
    public function setOs(string $os)
    {
        $this->payload['os'] = $os;
        return $this;
    }

    /**
     * @param string $seDomain
     * @return $this
     */
    public function setSeDomain(string $seDomain)
    {
        $this->payload['se_domain'] = $seDomain;
        return $this;
    }

    /**
     * @param int $depth
     * @return $this
     */
    public function setDepth(int $depth)
    {
        $this->payload['depth'] = $depth;
        return $this;
    }

    /**
     * @param string $searchParam
     * @return $this
     */
    public function setSearchParam(string $searchParam)
    {
        $this->payload['search_param'] = $searchParam;
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
     * @param string $postbackUrl
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;
        return $this;
    }

    /**
     * @param string $postbackData
     * @return $this
     */
    public function setPostbackData(string $postbackData)
    {
        $this->payload['postback_data'] = $postbackData;
        return $this;
    }

    /**
     * @param string $pingbackUrl
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;
        return $this;
    }

    /**
     * @param string $seType
     * @return $this
     * @throws \Exception
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType,$this->seTypes))
            throw new \Exception('Provided se type not allowed');

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

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
	 * @param bool $calculateRectangles
	 * @return $this
	 */
    public function setCalculateRectangles(bool $calculateRectangles)
    {
	    $this->payload['calculate_rectangles'] = $calculateRectangles;
	    return $this;
    }

	/**
	 * @param int $browserScreenWidth
	 * @return $this
	 */
    public function setBrowserScreenWidth(int $browserScreenWidth)
    {
	    $this->payload['browser_screen_width'] = $browserScreenWidth;
	    return $this;
    }

	/**
	 * @param int $browserScreenHeight
	 * @return $this
	 */
    public function setBrowserScreenHeight(int $browserScreenHeight)
    {
	    $this->payload['browser_screen_height'] = $browserScreenHeight;
	    return $this;
    }

	/**
	 * @param int $browserScreenResolutionRatio
	 * @return $this
	 */
    public function setBrowserScreenResolutionRatio(int $browserScreenResolutionRatio)
    {
	    $this->payload['browser_screen_resolution_ratio'] = $browserScreenResolutionRatio;
	    return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     * @return \DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool): \DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
