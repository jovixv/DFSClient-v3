<?php

namespace DFSClientV3\Models\DataForSeoLabsApi\Google;

use DFSClientV3\Entity\Custom\GoogleCategoriesForKeywordsLanguagesEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleCategoriesForKeywordsLanguages extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'dataforseo_labs/google/categories_for_keywords/languages';

    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return GoogleCategoriesForKeywordsLanguagesEntityMain
     */
    #[\Override]
    public function get(): GoogleCategoriesForKeywordsLanguagesEntityMain
    {
        return parent::get();
    }
}
