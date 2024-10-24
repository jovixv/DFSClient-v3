<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppSearches;

use DFSClientV3\Entity\Custom\AppleAppSearchesGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppSearchesGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_searches/task_get/advanced/{$taskUUID}';

    protected $resultShouldBeTransformedToArray = true;

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
     * @return AppleAppSearchesGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AppleAppSearchesGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
