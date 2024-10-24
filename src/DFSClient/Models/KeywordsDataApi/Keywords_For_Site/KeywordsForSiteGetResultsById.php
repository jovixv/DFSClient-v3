<?php

namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Site;

use DFSClientV3\Entity\Custom\KeywordsForSiteGetResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class KeywordsForSiteGetResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->{$postID}->result';

    protected $requestToFunction = 'keywords_data/{$se}/keywords_for_site/task_get/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

    protected $useNewMapper = true;

    /**
     * @param string $seName
     *
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);

        return $this;
    }

    /**
     * @param string $taskUUID
     *
     * @return $this
     */
    public function setTaskId(string $taskUUID)
    {
        $this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);

        return $this;
    }

    /**
     * @return KeywordsForSiteGetResultsByIdEntityMain
     */
    #[\Override]
    public function get(): KeywordsForSiteGetResultsByIdEntityMain
    {
        return parent::get();
    }
}
