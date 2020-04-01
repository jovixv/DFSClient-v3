<?php


namespace DFSClientV3\Models\DataForSeoLabsApi;


use DFSClientV3\Models\AbstractModel;

class DFSLabsCategories extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/categories';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\DFSLabsCategoriesEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\DFSLabsCategoriesEntityMain
    {
        return parent::get();
    }
}