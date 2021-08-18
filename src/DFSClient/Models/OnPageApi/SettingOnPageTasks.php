<?php


namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Entity\Custom\SettingOnPageTasksEntityMain;
use DFSClientV3\Models\AbstractModel;

class SettingOnPageTasks extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'on_page/task_post';
    protected $resultShouldBeTransformedToArray = false;


    /**
     * @param string $target
     * @return $this
     */
    public function setTarget(string $target)
    {
      $this->payload['target'] = $target;
      return $this;
    }

    /**
     * @param int $maxCrawlPages
     * @return $this
     */
    public function setMaxCrawlPages(int $maxCrawlPages)
    {
        $this->payload['max_crawl_pages'] = $maxCrawlPages;
        return $this;
    }

    /**
     * @param string $startUrl
     * @return $this
     */
    public function setStartUrl(string $startUrl)
    {
        $this->payload['start_url'] = $startUrl;
        return $this;
    }

    /**
     * @param int $crawlDelay
     * @return $this
     */
    public function setCrawlDelay(int $crawlDelay)
    {
        $this->payload['crawl_delay'] = $crawlDelay;
        return $this;
    }

    /**
     * @param int $maxCrawlDepth
     * @return $this
     */
    public function setMaxCrawlDepth(int $maxCrawlDepth)
    {
        $this->payload['max_crawl_depth'] = $maxCrawlDepth;
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
     * @param bool $supportCookies
     * @return $this
     */
    public function setSupportCookies(bool $supportCookies)
    {
        $this->payload['support_cookies'] = $supportCookies;
        return $this;
    }

    /**
     * @param string $customRobotsTxt
     * @return $this
     */
    public function setCustomRobotsTxt(string $customRobotsTxt)
    {
        $this->payload['custom_robots_txt'] = $customRobotsTxt;
        return $this;
    }

    /**
     * @param string $robotTxtMergeMode
     * @return $this
     */
    public function setRobotTxtMergeMode(string $robotTxtMergeMode)
    {
        $this->payload['robots_txt_merge_mode'] = $robotTxtMergeMode;
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
     * @param bool $respectSitemap
     * @return $this
     */
    public function setRespectSitemap(bool $respectSitemap)
    {
        $this->payload['respect_sitemap'] = $respectSitemap;
        return $this;
    }

    /**
     * @param string $customSitemap
     * @return $this
     */
    public function setCustomSitemap(string $customSitemap)
    {
        $this->payload['custom_sitemap'] = $customSitemap;
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
     * @param bool $enableJavascript
     * @return $this
     */
    public function setEnableJavascript(bool $enableJavascript)
    {
        $this->payload['enable_javascript'] = $enableJavascript;
        return $this;
    }

    /**
     * @param bool $enableJavascript
     * @return $this
     */
    public function setEnableXhr(bool $enableXhr)
    {
        $this->payload['enable_xhr'] = $enableXhr;
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
     * @param string $customJs
     * @return $this
     */
    public function setCustomJs(string $customJs)
    {
        $this->payload['custom_js'] = $customJs;
        return $this;
    }

    /**
     * @param bool $allowSubdomains
     * @return $this
     */
    public function setAllowSubdomains(bool $allowSubdomains)
    {
        $this->payload['allow_subdomains'] = $allowSubdomains;
        return $this;
    }

    /**
     * @param array $allowedSubdomains
     * @return $this
     */
    public function setAllowedSubdomains(array $allowedSubdomains)
    {
        $this->payload['allowed_subdomains'] = $allowedSubdomains;
        return $this;
    }

    /**
     * @param bool $checkSpell
     * @return $this
     */
    public function setCheckSpell(bool $checkSpell)
    {
        $this->payload['check_spell'] = $checkSpell;
        return $this;
    }

    /**
     * @param array $checkSpellExceptions
     * @return $this
     */
    public function setCheckSpellExceptions(array $checkSpellExceptions)
    {
        $this->payload['check_spell_exceptions'] = $checkSpellExceptions;
        return $this;
    }

	/**
	 * @param array $checkSpellLanguage
	 * @return $this
	 */
    public function setCheckSpellLanguage(array $checkSpellLanguage)
    {
        $this->payload['check_spell_language'] = $checkSpellLanguage;
        return $this;
    }

    /**
     * @param array $checkThreshold
     * @return $this
     */
    public function setCheckThreshold(array $checkThreshold)
    {
        $this->payload['checks_threshold'] = $checkThreshold;
        return $this;
    }

    /**
     * @param string|array|object $tag
     * @return $this
     */
    public function setTag($tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @param string $pingBackUrl
     * @return $this
     */
    public function setPingBackUrl(string $pingBackUrl)
    {
        $this->payload['pingback_url'] = $pingBackUrl;
        return $this;
    }


    /**
     * @return SettingOnPageTasksEntityMain
     */
    public function get(): SettingOnPageTasksEntityMain
    {
       return parent::get(); // TODO: Change the autogenerated stub
    }

    /**
     * @param array $modelPool
     * @return SettingOnPageTasksEntityMain
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool): SettingOnPageTasksEntityMain
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }

}
