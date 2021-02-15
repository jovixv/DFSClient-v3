<?php


namespace DFSClientV3\Models\OnPageApi;

use DFSClientV3\Models\AbstractModel;

class OnPageInstantPages extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->0->result';
    protected $requestToFunction = 'on_page/instant_pages';
    protected $resultShouldBeTransformedToArray = true;
    protected $jsonContainVariadicType = true;
    protected $pathsToVariadicTypesAndValue = [
        'tasks->(:number)->result->(:number)->items->(:number)' => 'resource_type'
    ];

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
     * @param bool $checkSpell
     * @return $this
     */
    public function setCheckSpell(bool $checkSpell)
    {
        $this->payload['check_spell'] = $checkSpell;
        return $this;
    }

    /**
     * @param array $checksThreshold
     * @return $this
     */
    public function setChecksThreshold(array $checksThreshold)
    {
        $this->payload['checks_threshold'] = $checksThreshold;
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\OnPageInstantPagesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\OnPageInstantPagesEntityMain
    {
        return parent::get();
    }
}
