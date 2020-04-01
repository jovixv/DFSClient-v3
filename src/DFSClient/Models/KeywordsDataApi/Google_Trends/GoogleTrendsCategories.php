<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsCategories extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/categories';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsCategoriesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsCategoriesEntityMain
    {
        return parent::get();
    }
}