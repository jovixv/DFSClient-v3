<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Ads;


use DFSClientV3\Models\AbstractModel;

class GoogleAdsCategories extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/{$se}/categories';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName = 'google')
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleAdsCategoriesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleAdsCategoriesEntityMain
    {
        return parent::get();
    }
}