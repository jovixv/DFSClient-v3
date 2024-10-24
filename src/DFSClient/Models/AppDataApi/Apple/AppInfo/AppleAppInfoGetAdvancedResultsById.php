<?php

namespace DFSClientV3\Models\AppDataApi\Apple\AppInfo;

use DFSClientV3\Entity\Custom\AppleAppInfoGetAdvancedResultsByIdEntityMain;
use DFSClientV3\Models\AbstractModel;

class AppleAppInfoGetAdvancedResultsById extends AbstractModel
{
    protected $method = 'GET';

    protected $isSupportedMerge = false;

    protected $pathToMainData = 'tasks->0->result';

    protected $requestToFunction = 'app_data/apple/app_info/task_get/advanced/{$taskUUID}';

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
     * @return AppleAppInfoGetAdvancedResultsByIdEntityMain
     */
    #[\Override]
    public function get(): AppleAppInfoGetAdvancedResultsByIdEntityMain
    {
        return parent::get();
    }
}
