<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class SettingSerpLiveHtml extends AbstractModel
{
    protected $method = 'POST';

    protected $isSupportedMerge = true;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'serp/{$se}/{$seType}/live/html';

    protected $resultShouldBeTransformedToArray = true;

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
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority(string $priority)
    {
        $this->payload['priority'] = $priority;

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
     * @param string $device
     *
     * @return $this
     */
    public function setDevice(string $device)
    {
        $this->payload['device'] = $device;

        return $this;
    }

    /**
     * @param string $os
     *
     * @return $this
     */
    public function setOs(string $os)
    {
        $this->payload['os'] = $os;

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
     * for google/organic.
     *
     * @param bool $load_async_ai_overview
     *
     * @return $this
     */
    public function setLoadAsyncAiOverview(bool $load_async_ai_overview)
    {
        $this->payload['load_async_ai_overview'] = $load_async_ai_overview;

        return $this;
    }

    /**
     * for google/organic.
     *
     * @param bool $expand_ai_overview
     *
     * @return $this
     */
    public function setExpandAiOverview(bool $expand_ai_overview)
    {
        $this->payload['expand_ai_overview'] = $expand_ai_overview;

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
     * @param string $seType
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setSeType(string $seType)
    {
        if (!in_array($seType, $this->seTypes)) {
            throw new \Exception('Provided se type not allowed');
        }

        $this->requestToFunction = str_replace('{$seType}', $seType, $this->requestToFunction);

        return $this;
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

    /**
     * @return \DFSClientV3\Entity\Custom\SettingSerpTasksEntityMain
     */
    #[\Override]
    public function get(): SettingSerpTasksEntityMain
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
