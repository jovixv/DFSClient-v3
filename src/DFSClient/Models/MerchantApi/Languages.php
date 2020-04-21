<?php


namespace DFSClientV3\Models\MerchantApi;


use DFSClientV3\Models\AbstractModel;

class Languages extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'merchant/{$se}/languages';
    protected $resultShouldBeTransformedToArray = true;

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
     * @return \DFSClientV3\Entity\Custom\LanguagesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\LanguagesEntityMain
    {
        return parent::get();
    }
}