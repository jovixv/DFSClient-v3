<?php

namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\OnPageContentParsingLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class OnPageContentParsingLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'on_page/content_parsing/live';
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
     * @param string $customUserAgent
     * @return $this
     */
    public function setCustomUserAgent(string $customUserAgent)
    {
        $this->payload['custom_user_agent'] = $customUserAgent;
        return $this;
    }

	/**
	 * @param string $customJs
	 * @return $this
	 */
	public function setCustomJs(string $customJs)
	{
		$this->payload['custom_js'] = $customJs;
		return $this;
	}

	/**
	 * @param bool $enableJavascript
	 * @return $this
	 */
	public function setEnableJavascript(bool $enableJavascript)
	{
		$this->payload['enable_javascript'] = $enableJavascript;
		return $this;
	}

	/**
	 * @param bool $loadResources
	 * @return $this
	 */
	public function setLoadResources(bool $loadResources)
	{
		$this->payload['load_resources'] = $loadResources;
		return $this;
	}

	/**
	 * @param bool $enableXhr
	 * @return $this
	 */
	public function setEnableXhr(bool $enableXhr)
	{
		$this->payload['enable_xhr'] = $enableXhr;
		return $this;
	}

	/**
	 * @param bool $storeRawHtml
	 * @return $this
	 */
	public function setStoreRawHtml(bool $storeRawHtml)
	{
		$this->payload['store_raw_html'] = $storeRawHtml;
		return $this;
	}

	/**
	 * @param bool $enableBrowserRendering
	 * @return $this
	 */
	public function setEnableBrowserRendering(bool $enableBrowserRendering)
	{
		$this->payload['enable_browser_rendering'] = $enableBrowserRendering;
		return $this;
	}

	/**
	 * @param bool $disableCookiePopup
	 * @return $this
	 */
	public function setDisableCookiePopup(bool $disableCookiePopup)
	{
		$this->payload['disable_cookie_popup'] = $disableCookiePopup;
		return $this;
	}

	/**
	 * @param string $browserPreset
	 * @return $this
	 */
	public function setBrowserPreset(string $browserPreset)
	{
		$this->payload['browser_preset'] = $browserPreset;
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
	 * @param float $browserScreenScaleFactor
	 * @return $this
	 */
	public function setBrowserScreenScaleFactor(float $browserScreenScaleFactor)
	{
		$this->payload['browser_screen_scale_factor'] = $browserScreenScaleFactor;
		return $this;
	}

	/**
	 * @param string $acceptLanguage
	 * @return $this
	 */
	public function setAcceptLanguage(string $acceptLanguage)
	{
		$this->payload['accept_language'] = $acceptLanguage;
		return $this;
	}

    /**
     * @return OnPageContentParsingLiveEntityMain
     */
    public function get(): OnPageContentParsingLiveEntityMain
    {
        return parent::get();
    }
}
