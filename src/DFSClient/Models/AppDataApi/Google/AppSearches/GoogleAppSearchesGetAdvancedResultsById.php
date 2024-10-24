<?php

namespace DFSClientV3\Models\AppDataApi\Google\AppSearches;

use DFSClientV3\Entity\Custom\GoogleAppSearchesGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class GoogleAppSearchesGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/google/app_searches/task_get/advanced/{$taskUUID}';

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
     * @return GoogleAppSearchesGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): GoogleAppSearchesGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
