<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31.10.2018
 * Time: 16:17.
 */

namespace DFSClientV3\Models\KeywordsFinderApi\Relevant_Pages;

use DFSClientV3\Models\AbstractModel;

class RelevantPages extends AbstractModel
{
    protected $requestToFunction = 'kwrd_finder_relevant_pages_get';
    protected $pathToMainData = 'results->0->relevant_pages';
    protected $method = 'POST';
    protected $isSupportedMerge = false;
}
