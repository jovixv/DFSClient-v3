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
     *
     * @return $this
     */
    public function setTarget(string $target)
    {
        $this->payload['target'] = $target;

        return $this;
    }

    /**
     * @param int $maxCrawlPages
     *
     * @return $this
     */
    public function setMaxCrawlPages(int $maxCrawlPages)
    {
        $this->payload['max_crawl_pages'] = $maxCrawlPages;

        return $this;
    }

    /**
     * @param string $startUrl
     *
     * @return $this
     */
    public function setStartUrl(string $startUrl)
    {
        $this->payload['start_url'] = $startUrl;

        return $this;
    }

    /**
     * @param bool $forceSitewideChecks
     *
     * @return $this
     */
    public function setForceSitewideChecks(bool $forceSitewideChecks)
    {
        $this->payload['force_sitewide_checks'] = $forceSitewideChecks;

        return $this;
    }

    /**
     * @param array $priorityUrls
     *
     * @return $this
     */
    public function setPriorityUrls(array $priorityUrls)
    {
        $this->payload['priority_urls'] = $priorityUrls;

        return $this;
    }

    /**
     * @param int $maxCrawlDepth
     *
     * @return $this
     */
    public function setMaxCrawlDepth(int $maxCrawlDepth)
    {
        $this->payload['max_crawl_depth'] = $maxCrawlDepth;

        return $this;
    }

    /**
     * @param int $crawlDelay
     *
     * @return $this
     */
    public function setCrawlDelay(int $crawlDelay)
    {
        $this->payload['crawl_delay'] = $crawlDelay;

        return $this;
    }

    /**
     * @param bool $storeRawHtml
     *
     * @return $this
     */
    public function setStoreRawHtml(bool $storeRawHtml)
    {
        $this->payload['store_raw_html'] = $storeRawHtml;

        return $this;
    }

    /**
     * @param bool $enableContentParsing
     *
     * @return $this
     */
    public function setEnableContentParsing(bool $enableContentParsing)
    {
        $this->payload['enable_content_parsing'] = $enableContentParsing;

        return $this;
    }

    /**
     * @param bool $supportCookies
     *
     * @return $this
     */
    public function setSupportCookies(bool $supportCookies)
    {
        $this->payload['support_cookies'] = $supportCookies;

        return $this;
    }

    /**
     * @param string $acceptLanguage
     *
     * @return $this
     */
    public function setAcceptLanguage(string $acceptLanguage)
    {
        $this->payload['accept_language'] = $acceptLanguage;

        return $this;
    }

    /**
     * @param string $customRobotsTxt
     *
     * @return $this
     */
    public function setCustomRobotsTxt(string $customRobotsTxt)
    {
        $this->payload['custom_robots_txt'] = $customRobotsTxt;

        return $this;
    }

    /**
     * @param string $robotTxtMergeMode
     *
     * @return $this
     */
    public function setRobotTxtMergeMode(string $robotTxtMergeMode)
    {
        $this->payload['robots_txt_merge_mode'] = $robotTxtMergeMode;

        return $this;
    }

    /**
     * @param string $customUserAgent
     *
     * @return $this
     */
    public function setCustomUserAgent(string $customUserAgent)
    {
        $this->payload['custom_user_agent'] = $customUserAgent;

        return $this;
    }

    /**
     * @param string $browserPreset
     *
     * @return $this
     */
    public function setBrowserPreset(string $browserPreset)
    {
        $this->payload['browser_preset'] = $browserPreset;

        return $this;
    }

    /**
     * @param int $browserScreenWidth
     *
     * @return $this
     */
    public function setBrowserScreenWidth(int $browserScreenWidth)
    {
        $this->payload['browser_screen_width'] = $browserScreenWidth;

        return $this;
    }

    /**
     * @param int $browserScreenHeight
     *
     * @return $this
     */
    public function setBrowserScreenHeight(int $browserScreenHeight)
    {
        $this->payload['browser_screen_height'] = $browserScreenHeight;

        return $this;
    }

    /**
     * @param float $browserScreenScaleFactor
     *
     * @return $this
     */
    public function setBrowserScreenScaleFactor(float $browserScreenScaleFactor)
    {
        $this->payload['browser_screen_scale_factor'] = $browserScreenScaleFactor;

        return $this;
    }

    /**
     * @param bool $respectSitemap
     *
     * @return $this
     */
    public function setRespectSitemap(bool $respectSitemap)
    {
        $this->payload['respect_sitemap'] = $respectSitemap;

        return $this;
    }

    /**
     * @param string $customSitemap
     *
     * @return $this
     */
    public function setCustomSitemap(string $customSitemap)
    {
        $this->payload['custom_sitemap'] = $customSitemap;

        return $this;
    }

    /**
     * @param bool $crawlSitemapOnly
     *
     * @return $this
     */
    public function setCrawlSitemapOnly(bool $crawlSitemapOnly)
    {
        $this->payload['crawl_sitemap_only'] = $crawlSitemapOnly;

        return $this;
    }

    /**
     * @param bool $loadResources
     *
     * @return $this
     */
    public function setLoadResources(bool $loadResources)
    {
        $this->payload['load_resources'] = $loadResources;

        return $this;
    }

    /**
     * @param bool $enableWwwRedirectCheck
     *
     * @return $this
     */
    public function setEnableWwwRedirectCheck(bool $enableWwwRedirectCheck)
    {
        $this->payload['enable_www_redirect_check'] = $enableWwwRedirectCheck;

        return $this;
    }

    /**
     * @param bool $enableJavascript
     *
     * @return $this
     */
    public function setEnableJavascript(bool $enableJavascript)
    {
        $this->payload['enable_javascript'] = $enableJavascript;

        return $this;
    }

    /**
     * @param bool $enableXhr
     *
     * @return $this
     */
    public function setEnableXhr(bool $enableXhr)
    {
        $this->payload['enable_xhr'] = $enableXhr;

        return $this;
    }

    /**
     * @param bool $enableBrowserRendering
     *
     * @return $this
     */
    public function setEnableBrowserRendering(bool $enableBrowserRendering)
    {
        $this->payload['enable_browser_rendering'] = $enableBrowserRendering;

        return $this;
    }

    /**
     * @param bool $disableCookiePopup
     *
     * @return $this
     */
    public function setDisableCookiePopup(bool $disableCookiePopup)
    {
        $this->payload['disable_cookie_popup'] = $disableCookiePopup;

        return $this;
    }

    /**
     * @param string $customJs
     *
     * @return $this
     */
    public function setCustomJs(string $customJs)
    {
        $this->payload['custom_js'] = $customJs;

        return $this;
    }

    /**
     * @param bool $validateMicromarkup
     *
     * @return $this
     */
    public function setValidateMicromarkup(bool $validateMicromarkup)
    {
        $this->payload['validate_micromarkup'] = $validateMicromarkup;

        return $this;
    }

    /**
     * @param bool $allowSubdomains
     *
     * @return $this
     */
    public function setAllowSubdomains(bool $allowSubdomains)
    {
        $this->payload['allow_subdomains'] = $allowSubdomains;

        return $this;
    }

    /**
     * @param array $allowedSubdomains
     *
     * @return $this
     */
    public function setAllowedSubdomains(array $allowedSubdomains)
    {
        $this->payload['allowed_subdomains'] = $allowedSubdomains;

        return $this;
    }

    /**
     * @param array $disallowedSubdomains
     *
     * @return $this
     */
    public function setDisallowedSubdomains(array $disallowedSubdomains)
    {
        $this->payload['disallowed_subdomains'] = $disallowedSubdomains;

        return $this;
    }

    /**
     * @param bool $checkSpell
     *
     * @return $this
     */
    public function setCheckSpell(bool $checkSpell)
    {
        $this->payload['check_spell'] = $checkSpell;

        return $this;
    }

    /**
     * @param string $checkSpellLanguage
     *
     * @return $this
     */
    public function setCheckSpellLanguage(string $checkSpellLanguage)
    {
        $this->payload['check_spell_language'] = $checkSpellLanguage;

        return $this;
    }

    /**
     * @param array $checkSpellExceptions
     *
     * @return $this
     */
    public function setCheckSpellExceptions(array $checkSpellExceptions)
    {
        $this->payload['check_spell_exceptions'] = $checkSpellExceptions;

        return $this;
    }

    /**
     * @param bool $calculateKeywordDensity
     *
     * @return $this
     */
    public function setCalculateKeywordDensity(bool $calculateKeywordDensity)
    {
        $this->payload['calculate_keyword_density'] = $calculateKeywordDensity;

        return $this;
    }

    /**
     * @param array $checkThreshold
     *
     * @return $this
     */
    public function setCheckThreshold(array $checkThreshold)
    {
        $this->payload['checks_threshold'] = $checkThreshold;

        return $this;
    }

    /**
     * @param array $disableSitewideChecks
     *
     * @return $this
     */
    public function setDisableSitewideChecks(array $disableSitewideChecks)
    {
        $this->payload['disable_sitewide_checks'] = $disableSitewideChecks;

        return $this;
    }

    /**
     * @param array $disablePageChecks
     *
     * @return $this
     */
    public function setDisablePageChecks(array $disablePageChecks)
    {
        $this->payload['disable_page_checks'] = $disablePageChecks;

        return $this;
    }

    /**
     * @param bool $switchPool
     *
     * @return $this
     */
    public function setSwitchPool(bool $switchPool)
    {
        $this->payload['switch_pool'] = $switchPool;

        return $this;
    }

    /**
     * @param string $ipPoolForScan
     *
     * @return $this
     */
    public function setIpPoolForScan(string $ipPoolForScan)
    {
        $this->payload['ip_pool_for_scan'] = $ipPoolForScan;

        return $this;
    }

    /**
     * @param bool $returnDespiteTimeout
     *
     * @return $this
     */
    public function setReturnDespiteTimeout(bool $returnDespiteTimeout)
    {
        $this->payload['return_despite_timeout'] = $returnDespiteTimeout;

        return $this;
    }

    /**
     * @param string|array|object $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }

    /**
     * @param string $pingBackUrl
     *
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
    #[\Override]
    public function get(): SettingOnPageTasksEntityMain
    {
        return parent::get(); // TODO: Change the autogenerated stub
    }

    /**
     * @param array $modelPool
     *
     * @throws \Exception
     *
     * @return SettingOnPageTasksEntityMain
     */
    #[\Override]
    public static function getAfterMerge(array $modelPool): SettingOnPageTasksEntityMain
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}
