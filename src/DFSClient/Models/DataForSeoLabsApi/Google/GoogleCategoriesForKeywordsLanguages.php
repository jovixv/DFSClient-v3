<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Models\AbstractModel;

class GoogleCategoriesForKeywordsLanguages extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/google/categories_for_keywords/languages';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleCategoriesForKeywordsLanguagesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleCategoriesForKeywordsLanguagesEntityMain
    {
        return parent::get();
    }
}
