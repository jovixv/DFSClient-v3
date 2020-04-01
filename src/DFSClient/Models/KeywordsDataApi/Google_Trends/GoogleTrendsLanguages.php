<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsLanguages extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/languages';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsLanguagesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsLanguagesEntityMain
    {
        return parent::get();
    }
}