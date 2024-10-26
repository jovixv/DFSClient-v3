<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppList;

use DFSClientV3\Entity\Custom\AppleAppListGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppListGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_list/task_get/advanced/{$taskUUID}';

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
     * @return AppleAppListGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AppleAppListGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
