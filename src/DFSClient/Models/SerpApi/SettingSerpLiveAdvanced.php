<?php

namespace DFSClientV3\Models\SerpApi;

use DFSClientV3\Models\AbstractModel;

class SettingSerpLiveAdvanced extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'serp/{$se}/{$seType}/live/advanced';
    protected $resultShouldBeTransformedToArray = true;
    protected $jsonContainVariadicType = true;
    protected $pathsToVariadicTypesAndValue = ['tasks->(:number)->result->(:number)->items->(:number)' => 'type'];
    protected $useNewMapper = true;

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
	 * Function for events
	 * @param string $dateRange
	 * @return $this
	 */
	public function setDateRange(string $dateRange)
	{
		$this->payload['date_range'] = $dateRange;
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
	 * @param float $minRating
	 * @return $this
	 */
	public function setMinRating(float $minRating)
	{
		$this->payload['min_rating'] = $minRating;
		return $this;
	}

	/**
	 * @param string $timeFilter
	 * @return $this
	 */
	public function setTimeFilter(string $timeFilter)
	{
		$this->payload['time_filter'] = $timeFilter;
		return $this;
	}

	/**
	 * for youtube
	 * @param string $videoId
	 * @return $this
	 */
	public function setVideoId(string $videoId)
	{
		$this->payload['video_id'] = $videoId;
		return $this;
	}

	/**
	 * for youtube/video_subtitles
	 * @param string $subtitlesLanguage
	 * @return $this
	 */
	public function setSubtitlesLanguage(string $subtitlesLanguage)
	{
		$this->payload['subtitles_language'] = $subtitlesLanguage;
		return $this;
	}

	/**
	 * for youtube/video_subtitles
	 * @param string $subtitlesTranslateLanguage
	 * @return $this
	 */
	public function setSubtitlesTranslateLanguage(string $subtitlesTranslateLanguage)
	{
		$this->payload['subtitles_translate_language'] = $subtitlesTranslateLanguage;
		return $this;
	}

	/**
	 * for youtube/organic
	 * @param int $block_depth
	 * @return $this
	 */
	public function setBlockDepth(int $block_depth)
	{
		$this->payload['block_depth'] = $block_depth;
		return $this;
	}

	/**
	 * @param string $last_updated
	 * @return $this
	 */
	public function setLastUpdated(string $last_updated) {
		$this->payload['last_updated'] = $last_updated;
		return $this;
	}

	/**
	 * @param array $file_formats
	 * @return $this
	 */
	public function setFileFormats(array $file_formats) {
		$this->payload['file_formats'] = $file_formats;
		return $this;
	}

	/**
	 * @param string $usage_rights
	 * @return $this
	 */
	public function setUsageRights(string $usage_rights) {
		$this->payload['usage_rights'] = $usage_rights;
		return $this;
	}

	/**
	 * @param bool $is_free
	 * @return $this
	 */
	public function setIsFree(bool $is_free) {
		$this->payload['is_free'] = $is_free;
		return $this;
	}

	/**
	 * @param array $topics
	 * @return $this
	 */
	public function setTopics(array $topics) {
		$this->payload['topics'] = $topics;
		return $this;
	}

	/**
	 * for google/organic/live
	 * for google/ads_search - has a different logic then google/organic/live
	 * @param string $target
	 * @return $this
	 */
	public function setTarget(string $target) {
		$this->payload['target'] = $target;
		return $this;
	}

	/**
	 * for google/organic
	 * @param bool $group_organic_results
	 * @return $this
	 */
	public function setGroupOrganicResults(bool $group_organic_results) {
		$this->payload['group_organic_results'] = $group_organic_results;
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
	 * for google/organic
	 * @param int $peopleAlsoAskClickDepth
	 * @return $this
	 */
	public function setPeopleAlsoAskClickDepth(int $peopleAlsoAskClickDepth)
	{
		$this->payload['people_also_ask_click_depth'] = $peopleAlsoAskClickDepth;
		return $this;
	}

	/**
	 * for google/maps
	 * @param bool $search_this_area
	 * @return $this
	 */
	public function setSearchThisArea(bool $search_this_area) {
		$this->payload['search_this_area'] = $search_this_area;
		return $this;
	}

	/**
	 * for google/maps
	 * @param bool $search_places
	 * @return $this
	 */
	public function setSearchPlaces(bool $search_places) {
		$this->payload['search_places'] = $search_places;
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
	 * for google/ads_search
	 * @param string $platform
	 * @return $this
	 */
	public function setPlatform(string $platform)
	{
		$this->payload['platform'] = $platform;
		return $this;
	}

	/**
	 * for google/ads_search
	 * @param string $format
	 * @return $this
	 */
	public function setFormat(string $format)
	{
		$this->payload['format'] = $format;
		return $this;
	}

	/**
	 * for google/ads_search
	 * @param string $dateFrom
	 * @return $this
	 */
	public function setDateFrom(string $dateFrom)
	{
		$this->payload['date_from'] = $dateFrom;
		return $this;
	}

	/**
	 * for google/ads_search
	 * @param string $dateTo
	 * @return $this
	 */
	public function setDateTo(string $dateTo)
	{
		$this->payload['date_to'] = $dateTo;
		return $this;
	}

	/**
	 * for google/ads_search
	 * @param array $advertiserIds
	 * @return $this
	 */
	public function setAdvertiserIds(array $advertiserIds)
	{
		$this->payload['advertiser_ids'] = $advertiserIds;
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
	 * @param string $dataset_id
	 * @return $this
	 */
	public function setDatasetId(string $dataset_id) {
		$this->payload['dataset_id'] = $dataset_id;
		return $this;
	}

	/**
	 * @param string $client
	 * @return $this
	 */
	public function setClient(string $client)
	{
		$this->payload['client'] = $client;
		return $this;
	}

	/**
	 * @param int $cursorPointer
	 * @return $this
	 */
	public function setCursorPointer(int $cursorPointer)
	{
		$this->payload['cursor_pointer'] = $cursorPointer;
		return $this;
	}

	/**
	 * for google/organic
	 * @param bool $load_async_ai_overview
	 * @return $this
	 */
	public function setLoadAsyncAiOverview(bool $load_async_ai_overview)
	{
		$this->payload['load_async_ai_overview'] = $load_async_ai_overview;
		return $this;
	}

	/**
	 * for google/finance_explore
	 * @param string $news_type
	 * @return $this
	 */
	public function setNewsType(string $news_type)
	{
		$this->payload['news_type'] = $news_type;
		return $this;
	}

	/**
	 * for google/finance_markets
	 * @param string $market_type
	 * @return $this
	 */
	public function setMarketType(string $market_type)
	{
		$this->payload['market_type'] = $market_type;
		return $this;
	}

	/**
	 * for google/finance_quote
	 * @param string $window
	 * @return $this
	 */
	public function setWindow(string $window)
	{
		$this->payload['window'] = $window;
		return $this;
	}

	/**
	 * for google/finance_ticker_search
	 * @param string $category
	 * @return $this
	 */
	public function setCategory(string $category)
	{
		$this->payload['category'] = $category;
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
     * @return \DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\SettingSerpLiveAdvancedEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }

}
